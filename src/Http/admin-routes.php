<?php

Route::group(['middleware' => ['web', 'admin']], function () {

    Route::get('/admin/imagegallery', 'Webkul\ImageGallery\Http\Controllers\Admin\ImageGalleryController@index')->defaults('_config', [
        'view' => 'imagegallery::admin.manageimages.index',
    ])->name('imagegallery.admin.manageimages.index');

    Route::get('/admin/imagegallery/create', 'Webkul\ImageGallery\Http\Controllers\Admin\ImageGalleryController@create')->defaults('_config', [
        'view' => 'imagegallery::admin.manageimages.create',
    ])->name('imagegallery.admin.manageimages.create');

    Route::post('/admin/imagegallery/create', 'Webkul\ImageGallery\Http\Controllers\Admin\ImageGalleryController@store')->defaults('_config', [
        'redirect' => 'imagegallery.admin.manageimages.index',
    ])->name('imagegallery.admin.manageimages.store');

    Route::get('/admin/imagegallery/edit/{id}', 'Webkul\ImageGallery\Http\Controllers\Admin\ImageGalleryController@edit')->defaults('_config', [
        'view' => 'imagegallery::admin.manageimages.edit',
    ])->name('imagegallery.admin.manageimages.edit');

    Route::put('/admin/imagegallery/edit/{id}', 'Webkul\ImageGallery\Http\Controllers\Admin\ImageGalleryController@update')->defaults('_config', [
        'redirect' => 'imagegallery.admin.manageimages.index',
    ])->name('imagegallery.admin.manageimages.update');

    Route::post('/admin/imagegallery/delete/{id}', 'Webkul\ImageGallery\Http\Controllers\Admin\ImageGalleryController@destroy')->name('imagegallery.admin.manageimages.delete');

    Route::post('admin/imagegallery/mass-update', 'Webkul\ImageGallery\Http\Controllers\Admin\ImageGalleryController@massUpdate')->defaults('_config', [
        'redirect' => 'imagegallery.admin.manageimages.index'
    ])->name('imagegallery.admin.manageimages.massupdate');

    Route::post('admin/imagegallery/mass-delete', 'Webkul\ImageGallery\Http\Controllers\Admin\ImageGalleryController@massDestroy')->defaults('_config', [
        'redirect' => 'imagegallery.admin.manageimages.index'
    ])->name('imagegallery.admin.manageimages.massdelete');


    Route::get('/admin/managegallery', 'Webkul\ImageGallery\Http\Controllers\Admin\ManageGalleryController@index')->defaults('_config', [
        'view' => 'imagegallery::admin.managegallery.index',
    ])->name('imagegallery.admin.managegallery.index');
    
    Route::get('admin/managegallery/create', 'Webkul\ImageGallery\Http\Controllers\Admin\ManageGalleryController@create')->defaults('_config', [
        'view' => 'imagegallery::admin.managegallery.create',
    ])->name('imagegallery.admin.managegallery.create');

    Route::post('/admin/managegallery/create', 'Webkul\ImageGallery\Http\Controllers\Admin\ManageGalleryController@store')->defaults('_config', [
        'redirect' => 'imagegallery.admin.managegallery.index',
    ])->name('imagegallery.admin.managegallery.store');

    Route::get('/admin/managegallery/edit/{id}', 'Webkul\ImageGallery\Http\Controllers\Admin\ManageGalleryController@edit')->defaults('_config', [
        'view' => 'imagegallery::admin.managegallery.edit',
    ])->name('imagegallery.admin.managegallery.edit');

    Route::put('/admin/managegallery/edit/{id}', 'Webkul\ImageGallery\Http\Controllers\Admin\ManageGalleryController@update')->defaults('_config', [
        'redirect' => 'imagegallery.admin.managegallery.index',
    ])->name('.update');

    Route::post('/admin/managegallery/delete/{id}', 'Webkul\ImageGallery\Http\Controllers\Admin\ManageGalleryController@destroy')->name('imagegallery.admin.managegallery.delete');

    Route::post('admin/managegallery/mass-update', 'Webkul\ImageGallery\Http\Controllers\Admin\ManageGalleryController@massUpdate')->defaults('_config', [
        'redirect' => 'imagegallery.admin.managegallery.index'
    ])->name('imagegallery.admin.managegallery.massupdate');

    Route::post('admin/managegallery/mass-delete', 'Webkul\ImageGallery\Http\Controllers\Admin\ManageGalleryController@massDestroy')->defaults('_config', [
        'redirect' => 'imagegallery.admin.managegallery.index'
    ])->name('imagegallery.admin.managegallery.massdelete');

    

    Route::get('/admin/managegroups', 'Webkul\ImageGallery\Http\Controllers\Admin\ManageGroupController@index')->defaults('_config', [
        'view' => 'imagegallery::admin.managegroups.index',
    ])->name('imagegallery.admin.managegroups.index');

    Route::get('/admin/managegroups/create', 'Webkul\ImageGallery\Http\Controllers\Admin\ManageGroupController@create')->defaults('_config', [
        'view' => 'imagegallery::admin.managegroups.create',
    ])->name('imagegallery.admin.managegroups.create');

    Route::post('/admin/managegroups/create', 'Webkul\ImageGallery\Http\Controllers\Admin\ManageGroupController@store')->defaults('_config', [
        'redirect' => 'imagegallery.admin.managegroups.index',
    ])->name('imagegallery.admin.managegroups.store');

    Route::get('/admin/managegroups/edit/{id}', 'Webkul\ImageGallery\Http\Controllers\Admin\ManageGroupController@edit')->defaults('_config', [
        'view' => 'imagegallery::admin.managegroups.edit',
    ])->name('imagegallery.admin.managegroups.edit');

    Route::put('/admin/managegroups/edit/{id}', 'Webkul\ImageGallery\Http\Controllers\Admin\ManageGroupController@update')->defaults('_config', [
        'redirect' => 'imagegallery.admin.managegroups.index',
    ])->name('imagegallery.admin.managegroups.update');

    Route::post('/admin/managegroups/delete/{id}', 'Webkul\ImageGallery\Http\Controllers\Admin\ManageGroupController@destroy')->name('imagegallery.admin.managegroups.delete');

    Route::post('admin/managegroups/mass-update', 'Webkul\ImageGallery\Http\Controllers\Admin\ManageGroupController@massUpdate')->defaults('_config', [
        'redirect' => 'imagegallery.admin.managegroups.index'
    ])->name('imagegallery.admin.managegroups.massupdate');

    Route::post('admin/managegroups/mass-delete', 'Webkul\ImageGallery\Http\Controllers\Admin\ManageGroupController@massDestroy')->defaults('_config', [
        'redirect' => 'imagegallery.admin.managegroups.index'
    ])->name('imagegallery.admin.managegroups.massdelete');


});
