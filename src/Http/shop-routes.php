<?php

Route::group(['middleware' => ['web', 'theme', 'locale', 'currency']], function () {

    Route::get('/gallery', 'Webkul\ImageGallery\Http\Controllers\Shop\ImageGalleryController@index')->defaults('_config', [
        'view' => 'imagegallery::shop.index',
    ])->name('imagegallery.shop.index');
    
    Route::get('/gallery/gallery-group/{id}', 'Webkul\ImageGallery\Http\Controllers\Shop\ImageGalleryController@indeximage')->defaults('_config', [
        'view' => 'imagegallery::shop.image',
    ])->name('imagegallery.shop.image');

});