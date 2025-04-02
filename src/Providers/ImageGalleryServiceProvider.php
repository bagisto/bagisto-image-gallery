<?php

namespace Webkul\ImageGallery\Providers;

use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Webkul\ImageGallery\Http\Middleware\ImageGallery;

class ImageGalleryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot(Router $router)
    {
        $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');

        $this->loadTranslationsFrom(__DIR__ . '/../Resources/lang', 'image-gallery');

        $this->loadViewsFrom(__DIR__ . '/../Resources/views', 'image-gallery');

        $this->app->register(ModuleServiceProvider::class);

        $this->app->register(EventServiceProvider::class);
        
        $router->aliasMiddleware('imageGallery', ImageGallery::class);

        Blade::anonymousComponentPath(__DIR__ . '/../Resources/views/components', 'image-gallery');

        Route::middleware('web')->group(__DIR__ . '/../Routes/admin-routes.php');

        Route::middleware('web')->group(__DIR__ . '/../Routes/shop-routes.php');

        if (core()->getConfigData('image.setting.image-options.status')) {
            $this->mergeConfigFrom(
                dirname(__DIR__) . '/Config/admin-menu.php', 'menu.admin'
            );    
        }

        /* Breadcrumbs */
        require __DIR__ . '/../Routes/breadcrumbs.php';

        // Publish Assets
        $this->publishAssets();

        if ($this->app->runningInConsole()) {
            $this->commands([
                \Webkul\ImageGallery\Console\Commands\ImageGalleryCommand::class,
            ]);
        }
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerConfig();
    }

    /**
     * Register package config.
     *
     * @return void
     */
    protected function registerConfig()
    {
        $this->mergeConfigFrom(
            dirname(__DIR__) . '/Config/acl.php', 'acl'
        );

        $this->mergeConfigFrom(
            dirname(__DIR__) . '/Config/system.php', 'core'
        );

        $this->mergeConfigFrom(
            dirname(__DIR__).'/Config/bagisto-vite.php',
            'bagisto-vite.viters'
        );
    }

    /**
     * Publish the assets.
     *
     * @return void
     */
    protected function publishAssets()
    {
        $this->publishes([
            __DIR__ .'/../../publishable' => public_path('themes/image-gallery')
        ], 'public');
    }
}