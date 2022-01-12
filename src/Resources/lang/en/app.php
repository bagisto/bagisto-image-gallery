<?php

return [    
    'images' => [
        'page-title' => 'Manage Images',
        'action'     => 'Add Image',   
        'create' =>  [
            'page_title' => 'Add Image',
            'action'  => 'Save Image',
            'accordian_title' => 'Images',
            'title' => 'Image Title',
            'description'   =>    'Description',
            'sort'   =>    'Sort',
            'image'   =>    'Image',
            'btn_label'   =>    'Add Image',
            'title_msg'   =>    "Make sure you don't use spaces and capital letters",
            'status'   =>    'Status',
            'enable'   =>    'Enable',
            'disable'   =>    'Disable',
        ],
        'edit' =>   [
            'page_title'  => 'Edit Image',
            'action'  =>  'Update Image',
            'accordian_title' => 'Images',
            'title' => 'Image Title',
            'description'   =>    'Description',
            'sort'   =>    'Sort',
            'image'   =>    'Image',
            'btn_label'   =>    'Add Image',
            'title_msg'   =>    "Make sure you don't use spaces and capital letters",
            'status'   =>    'Status',
            'enable'   =>    'Enable',
            'disable'   =>    'Disable',
        ]
    ], 'manage_gallery' => [
        'page-title' => 'Manage Gallery',
        'action'     => 'Add Gallery',   
        'create' =>  [
            'page_title' => 'Add Gallery',
            'action'  => 'Save Gallery',
            'accordian_title' => 'Gallery',
            'title' => 'Gallery Title',
            'gallery_image'   =>    'Gallery Image',
            'gallery_code'   =>    'Gallery Code',
            'status'   =>    'Status',
            'enable'   =>    'Enable',
            'disable'   =>    'Disable',
        ],
        'edit' =>   [
            'page_title'  => 'Edit Gallery',
            'action'  =>  'Update Gallery',
            'accordian_title' => 'Gallery',
            'title' => 'Gallery Title',
            'gallery_image'   =>    'Gallery Image',
            'gallery_code'   =>    'Gallery Code',
            'status'   =>    'Status',
            'enable'   =>    'Enable',
            'disable'   =>    'Disable',
        ]
    ], 'manage_group' => [
        'page_title' => 'Manage Group',
        'action'     => 'Add Group',   
        'create' =>  [
            'page_title' => 'Add Group',
            'action'  => 'Save Group',
            'accordian_title' => 'Group',
            'galleries'   =>    'Galleries',
            'group_code'   =>    'Group Code',
            'status'   =>    'Status',
            'enable'   =>    'Enable',
            'disable'   =>    'Disable',
        ],
        'edit' =>   [
            'page_title'  => 'Edit Group',
            'action'  =>  'Update Group',
            'accordian_title' => 'Group',
            'galleries'   =>    'Galleries',
            'group_code'   =>    'Group Code',
            'status'   =>    'Status',
            'enable'   =>    'Enable',
            'disable'   =>    'Disable',
        ]
    ], 'datagrid'  =>  [
            'image_gallery'  => [
                'id'  => 'Id',
                'thumbnail'  => 'Thumbnail',
                'image_title'  => 'Image Title',
                'description'  =>  'Description',
                'sort'  => 'Sort',
                'status'  => 'Status',
                'enable' => 'Enable',
                'disable' => 'Disable',
                'delete'  => 'Delete',
                'update'  => 'Update',
            ],
            'manage_gallery'  => [
                'id'  => 'Id',
                'gallery_code'  => 'Gallery Code',
                'gallery_title'  => 'Gallery Title',
                'description'  =>  'Description',
                'image_ids'  => 'Image Ids',
                'thumbnail_image_id'  => 'Thumbnail Image Id',
                'status'  =>  'Status',
                'enable' => 'Enable',
                'disable' => 'Disable',
            ],
            'manage_group'  => [
                'id'  => 'Id',
                'group_code'  => 'Group Code',
                'gallery_ids'  => 'Gallery Ids',
                'status'  =>  'Status',
                'enable' => 'Enable',
                'disable' => 'Disable',
            ]
    ],
    'view' => [
        'view_galleries'  =>  'View Galleries',
        'home'  =>  'Home',
        'image_gallery'  => 'Image Gallery',
        'gallery'  => 'Gallery',
    ]

];

