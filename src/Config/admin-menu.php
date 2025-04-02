<?php

return [
    [
        'key'   => 'image-gallery',
        'name'  => 'image-gallery::app.admin.layouts.image-gallery',
        'route' => 'admin.image-gallery.manage-images.index',
        'sort'  => 2,
        'icon'  => 'image-gallery-icon',
    ], [
        'key'   => 'image-gallery.manage-images',
        'name'  => 'image-gallery::app.admin.layouts.manage-images',
        'route' => 'admin.image-gallery.manage-images.index',
        'icon'  => '',
        'sort'  => 1,
    ], [
        'key'   => 'image-gallery.manage-gallery',
        'name'  => 'image-gallery::app.admin.layouts.manage-gallery',
        'route' => 'admin.image-gallery.manage-gallery.index',
        'icon'  => '',
        'sort'  => 2,
    ], [
        'key'   => 'image-gallery.manage-groups',
        'name'  => 'image-gallery::app.admin.layouts.manage-groups',
        'route' => 'admin.image-gallery.manage-groups.index',
        'icon'  => '',
        'sort'  => 3,
    ],
];