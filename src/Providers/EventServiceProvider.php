<?php

namespace Webkul\ImageGallery\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
/**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Event::listen('bagisto.admin.layout.body.before', function ($viewRenderEventManager) {
            $viewRenderEventManager->addTemplate('image-gallery::admin.style.index');
        });

        Event::listen('bagisto.shop.layout.head.after', function ($viewRenderEventManager) {
            $viewRenderEventManager->addTemplate('image-gallery::admin.style.index');
        });
    }
}