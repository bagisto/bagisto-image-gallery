<?php

return [
    [
        'key'   => 'image_gallery',
        'name'  => 'image-gallery::app.admin.layouts.image-gallery',
        'route' => 'admin.image-gallery.manage-images.index',
        'sort'  => 2,
    ], [
        'key'   => 'image_gallery.manage_images',
        'name'  => 'image-gallery::app.admin.layouts.manage-images',
        'route' => 'admin.image-gallery.manage-images.index',
        'sort'  => 1,
    ], [
        'key'   => 'image_gallery.manage_gallery',
        'name'  => 'image-gallery::app.admin.layouts.manage-gallery',
        'route' => 'admin.image-gallery.manage-gallery.index',
        'sort'  => 2,
    ], [
        'key'   => 'image_gallery.manage_groups',
        'name'  => 'image-gallery::app.admin.layouts.manage-groups',
        'route' => 'admin.image-gallery.manage-groups.index',
        'sort'  => 3,
    ],
];