<?php

namespace Webkul\ImageGallery\Providers;

use Konekt\Concord\BaseModuleServiceProvider;

class ModuleServiceProvider extends BaseModuleServiceProvider
{
    
    protected $models = [
        \Webkul\ImageGallery\Models\ImageGallery::class,
        \Webkul\ImageGallery\Models\ManageGallery::class,
        \Webkul\ImageGallery\Models\ManageGroup::class
        
        
    ];
}