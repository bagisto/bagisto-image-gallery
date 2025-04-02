<?php

use Illuminate\Support\Facades\Route;
use Webkul\ImageGallery\Http\Controllers\Shop\ImageGalleryController;

Route::group(['middleware' => ['theme', 'locale', 'currency', 'imageGallery']], function () {
    Route::controller(ImageGalleryController::class)->prefix('gallery')->group(function () {
        Route::get('', 'index')->name('shop.image-gallery.index');
        
        Route::get('/gallery-group/{id}', 'indexImage')->name('shop.image-gallery.image');
    });
});