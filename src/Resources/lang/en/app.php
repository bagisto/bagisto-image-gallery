<?php

return [   
    'admin' => [
        'configuration' => [
            'image-gallery' => [
                'info'  => 'Image Gallery',
                'title' => 'Image Gallery',

                'setting' => [
                    'info'  => 'Set unit options for image gallery',
                    'title' => 'Setting',

                    'image-options' => [
                        'gallery-setting' => 'Gallery Setting',
                        'info'            => 'Set opening-effect, closing effect, caption and more.',

                        'image-gallery-show' => [
                            'disable' => 'Disable',
                            'enable'  => 'Enable',
                            'title'   => 'Image Gallery Show',
                        ],

                        'opening-effect' => [
                            'elastic' => 'Elastic',
                            'fade'    => 'Fade',
                            'none'    => 'None',
                            'title'   => 'Opening Effect',
                        ],

                        'closing-effect' => [
                            'elastic' => 'Elastic',
                            'fade'    => 'Fade',
                            'none'    => 'None',
                            'title'   => 'Closing Effect',
                        ],

                        'caption' => [
                            'no'    => 'No',
                            'title' => 'Caption',
                            'yes'   => 'Yes',
                        ],

                        'caption-type' => [
                            'float'   => 'Float',
                            'info'    => "'float' and 'over' works with position 'bottom'.",
                            'inside'  => 'Inside',
                            'outside' => 'Outside',
                            'over'    => 'Over',
                            'title'   => 'Caption Type',
                        ],

                        'caption-position' => [
                            'bottom' => 'Bottom',
                            'title'  => 'Caption Position',
                            'top'    => 'Top',
                        ],

                        'background' => [
                            'dark'  => 'Dark',
                            'light' => 'Light',
                            'title' => 'Background',
                        ],

                        'cyclic' => [
                            'no'    => 'No',
                            'title' => 'Cyclic',
                            'yes'   => 'Yes',
                        ],

                        'interval' => [
                            'info'  => 'Only numeric values and must be between 5000 and 99999',
                            'title' => 'Interval',
                        ],

                        'border' => [
                            'no'    => 'No',
                            'title' => 'Border',
                            'yes'   => 'Yes',
                        ],

                        'slide-count' => [
                            'no'    => 'No',
                            'title' => 'Slide Count',
                            'yes'   => 'Yes',
                        ],

                        'controls' => [
                            'no'    => 'No',
                            'title' => 'Controls',
                            'yes'   => 'Yes',
                        ],
                    ],
                ],
            ],
        ],

        'layouts' => [
            'image-gallery'  => 'Image Gallery',
            'manage-gallery' => 'Manage Gallery',
            'manage-groups'  => 'Manage Groups',
            'manage-images'  => 'Manage Images',
        ],

        'image-gallery' => [
            'manage-images' => [
                'index' => [
                    'create' => 'Add Images',
                    'title'  => 'Manage Images',
                ],

                'create' => [
                    'back-btn'    => 'Back',
                    'description' => 'Description',
                    'disable'     => 'Disable',
                    'enable'      => 'Enable',
                    'general'     => 'General',
                    'image'       => 'Image',
                    'page-title'  => 'Add Images',
                    'save-btn'    => 'Save Images',
                    'sort'        => 'Sort',
                    'status'      => 'Status',
                    'title'       => 'Title',
                ],

                'edit' => [
                    'back-btn'    => 'Back',
                    'description' => 'Description',
                    'disable'     => 'Disable',
                    'enable'      => 'Enable',
                    'general'     => 'General',
                    'image'       => 'Image',
                    'page-title'  => 'Edit Images',
                    'save-btn'    => 'Save Images',
                    'sort'        => 'Sort',
                    'status'      => 'Status',
                    'title'       => 'Title',
                ],

                'create-success'      => 'Images created successfully.',
                'delete-failed'       => 'Unable to delete images.',
                'delete-success'      => 'Images deleted successfully.',
                'image-error'         => 'Image not Found.',
                'image-required'      => 'The image field is required.',
                'mass-delete-success' => 'Selected Images deleted successfully.',
                'mass-update-success' => 'Selected Images updated successfully.',
                'update-success'      => 'Images updated successfully.',
            ],

            'manage-gallery' => [
                'index' => [
                    'code-note' => 'Note: The Gallery code must be alphanumeric without spaces or special characters.',
                    'create'    => 'Create Gallery',
                    'title'     => 'Manage Gallery',
                ],

                'create' => [
                    'back-btn'           => 'Back',
                    'description'        => 'Description',
                    'disable'            => 'Disable',
                    'enable'             => 'Enable',
                    'gallery-code'       => 'Gallery Code',
                    'gallery-image'      => 'Gallery Image',
                    'gallery'            => 'Gallery',
                    'id'                 => 'Id',
                    'image-title'        => 'Image Title',
                    'page-title'         => 'Add Gallery',
                    'save-btn'           => 'Save Gallery',
                    'sort'               => 'Sort',
                    'status'             => 'Status',
                    'thumbnail-image-id' => 'Thumbnail Image ID',
                    'thumbnail'          => 'Thumbnail',
                    'title'              => 'Title',
                ],

                'edit' => [
                    'back-btn'      => 'Back',
                    'disable'       => 'Disable',
                    'enable'        => 'Enable',
                    'gallery-code'  => 'Gallery Code',
                    'gallery-image' => 'Gallery Image',
                    'gallery'       => 'Gallery',
                    'page-title'    => 'Edit Gallery',
                    'save-btn'      => 'Save Gallery',
                    'status'        => 'Status',
                    'title'         => 'Title',
                ],

                'create-success'      => 'Gallery created successfully.',
                'delete-failed'       => 'Unable to delete gallery.',
                'delete-success'      => 'Gallery deleted successfully.',
                'mass-delete-success' => 'Selected Gallery deleted successfully.',
                'mass-update-success' => 'Selected Gallery updated successfully.',
                'update-success'      => 'Gallery updated successfully.',
            ],

            'manage-groups' => [
                'index' => [
                    'code-note' => 'Note: The Group code must be alphanumeric without spaces or special characters.',
                    'create'    => 'Create Groups',
                    'title'     => 'Manage Groups',
                ],

                'create' => [
                    'back-btn'           => 'Back',
                    'disable'            => 'Disable',
                    'enable'             => 'Enable',
                    'gallery-code'       => 'Gallery Code',
                    'gallery-title'      => 'Gallery Title',
                    'group-code'         => 'Group Code',
                    'group'              => 'Group',
                    'id'                 => 'Id',
                    'image-ids'          => 'Image Ids',
                    'page-title'         => 'Add Group',
                    'save-btn'           => 'Save Group',
                    'status'             => 'Status',
                    'thumbnail-image-id' => 'Thumbnail Image Id',
                ],

                'edit' => [
                    'back-btn'      => 'Back',
                    'disable'       => 'Disable',
                    'enable'        => 'Enable',
                    'group-code'    => 'Group Code',
                    'group'         => 'Group',
                    'page-title'    => 'Edit Group',
                    'save-btn'      => 'Save Gallery',
                    'status'        => 'Status',
                ],

                'create-success'      => 'Groups created successfully.',
                'delete-failed'       => 'Unable to delete group.',
                'delete-success'      => 'Group deleted successfully.',
                'mass-delete-success' => 'Selected Groups deleted successfully.',
                'mass-update-success' => 'Selected Groups updated successfully.',
                'update-success'      => 'Groups updated successfully.',
            ],

            'datagrid' => [
                'delete'              => 'Delete',
                'description'         => 'Description',
                'disable'             => 'Disable', 
                'edit'                => 'Edit',
                'enable'              => 'Enable', 
                'gallery-code'        => 'Gallery Code',
                'gallery-ids'         => 'Gallery Id',
                'gallery-title'       => 'Gallery Title',
                'group-code'          => 'Group Code',
                'id'                  => 'Id',
                'image-ids'           => 'Image Ids',
                'image-title'         => 'Image Title',
                'sort'                => 'Sort', 
                'status'              => 'Status' , 
                'thumbnail-image-id'  => 'Thumbnail Image Id',
                'thumbnail'           => 'Thumbnail', 
                'update'              => 'Update',
            ],
        ],
    ], 

    'shop' => [
       'components' => [
            'categories' => [
                'gallery-description' => 'Welcome to our Product Collection Gallery, a curated showcase designed to inspire and inform. Each collection is thoughtfully assembled to highlight the unique features and benefits of our products',
                'gallery-heading'     => 'Explore Product Collection Gallery',
                'view-gallery'        => 'View Gallery',
            ],
        ],

        'image-gallery' => [
            'gallery'          => 'Gallery',
            'images'           => 'Images',
            'no-gallery-found' => 'No Gallery Available.',
            'no-image-found'   => 'No Image Available.',
            'view-gallery'     => 'View Gallery',
        ], 
    ],
];