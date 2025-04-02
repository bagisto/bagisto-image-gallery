<?php

use Illuminate\Support\Facades\Route;
use Webkul\ImageGallery\Http\Controllers\Admin\ImageGalleryController;
use Webkul\ImageGallery\Http\Controllers\Admin\ManageGalleryController;
use Webkul\ImageGallery\Http\Controllers\Admin\ManageGroupController;

Route::group(['middleware' => ['admin', 'imageGallery'], 'prefix' => config('app.admin_url'),], function () {

    Route::controller(ImageGalleryController::class)->prefix('image-gallery')->group(function () {
        Route::get('', 'index')->name('admin.image-gallery.manage-images.index');   
    
        Route::get('create', 'create')->name('admin.image-gallery.manage-images.create');
    
        Route::post('create', 'store')->name('admin.image-gallery.manage-images.store');
    
        Route::get('edit/{id}', 'edit')->name('admin.image-gallery.manage-images.edit');
    
        Route::put('edit/{id}', 'update')->name('admin.image-gallery.manage-images.update');
    
        Route::post('delete/{id}', 'destroy')->name('admin.image-gallery.manage-images.delete');

        Route::post('mass-update', 'massUpdate')->name('admin.image-gallery.manage-images.mass-update');
    
        Route::post('mass-delete', 'massDestroy')->name('admin.image-gallery.manage-images.mass-delete');
    });

    Route::controller(ManageGalleryController::class)->prefix('manage-gallery')->group(function () {
        Route::get('', 'index')->name('admin.image-gallery.manage-gallery.index');
        
        Route::get('create', 'create')->name('admin.image-gallery.manage-gallery.create');
    
        Route::post('create', 'store')->name('admin.image-gallery.manage-gallery.store');
    
        Route::get('edit/{id}', 'edit')->name('admin.image-gallery.manage-gallery.edit');
    
        Route::put('edit/{id}', 'update')->name('admin.image-gallery.manage-gallery.update');
    
        Route::post('delete/{id}', 'destroy')->name('admin.image-gallery.manage-gallery.delete');

        Route::post('mass-update', 'massUpdate')->name('admin.image-gallery.manage-gallery.mass-update');
    
        Route::post('mass-delete', 'massDestroy')->name('admin.image-gallery.manage-gallery.mass-delete');
    });

    Route::controller(ManageGroupController::class)->prefix('manage-groups')->group(function () {
        Route::get('', 'index')->name('admin.image-gallery.manage-groups.index');
    
        Route::get('create', 'create')->name('admin.image-gallery.manage-groups.create');
    
        Route::post('create', 'store')->name('admin.image-gallery.manage-groups.store');
    
        Route::get('edit/{id}', 'edit')->name('admin.image-gallery.manage-groups.edit');
    
        Route::put('edit/{id}', 'update')->name('admin.image-gallery.manage-groups.update');
    
        Route::post('delete/{id}', 'destroy')->name('admin.image-gallery.manage-groups.delete');

        Route::post('mass-update', 'massUpdate')->name('admin.image-gallery.manage-groups.mass-update');
    
        Route::post('mass-delete', 'massDestroy')->name('admin.image-gallery.manage-groups.mass-delete');
    });
});