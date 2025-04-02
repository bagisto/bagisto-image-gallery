<?php

namespace Webkul\ImageGallery\Console\Commands;

use Illuminate\Console\Command;
use Intervention\Image\ImageServiceProvider;
use Webkul\ImageGallery\Database\Seeders\GallerySeeder;
use Webkul\ImageGallery\Providers\ImageGalleryServiceProvider;

class ImageGalleryCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'image-gallery:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install Image Gallery';

    /**
     * Install and configure Marketplace.
     */
    public function handle()
    {
        $this->warn('Step 1: Updating Composer helper files...');
        exec('composer require laravel/helpers');
        $this->info('Composer helper files updated successfully.');

        $this->warn('Step 2: Migrating all tables into database (will take a while)...');
        $this->call('migrate');

        $this->warn('Step 3: Publishing Assets and Configurations...');
        $this->info($this->call('vendor:publish', [
            '--provider' => ImageGalleryServiceProvider::class,
            '--force'    => true,
        ]));

        $this->warn('Step 4: Clearing cached bootstrap files...');
        $this->call('optimize:clear');
    }
}