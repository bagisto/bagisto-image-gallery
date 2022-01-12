<?php

return [
    [
        'key'  => 'image',
        'name' => 'Image Gallery',
        'sort' => 1,
    ], [
        'key'  => 'image.image',
        'name' => 'Setting',
        'sort' => 1,
    ], [
        'key'    => 'image.image.image_options',
        'name'   => 'Gallery Setting',
        'sort'   => 1,
        'fields' => [
            [
                'name'          => 'image_gallery_show',
                'title'         => 'Image Gallery Visible',
                'type'          => 'select',
                'options'       => [
                    [
                        'title' => 'Enable',
                        'value' => 1,
                    ], [
                        'title' => 'Disable',
                        'value' => 0,
                    ]
                ],
                'channel_based' => true
            ],[
                'name'          => 'opening_effect',
                'title'         => 'Opening Effect',
                'type'          => 'select',
                'options'       => [
                    [
                        'title' => 'None',
                        'value' => 'None',
                    ], [
                        'title' => 'Fade',
                        'value' => 'Fade',
                    ], [
                        'title' => 'Elastic',
                        'value' => 'Elastic',
                    ],
                ],
                'channel_based' => true
            ], [
                'name'          => 'closing_effect',
                'title'         => 'Closing Effect',
                'type'          => 'select',
                'options'       => [
                    [
                        'title' => 'None',
                        'value' => 'None',
                    ], [
                        'title' => 'Fade',
                        'value' => 'Fade',
                    ], [
                        'title' => 'Elastic',
                        'value' => 'Elastic',
                    ],
                ],
                'channel_based' => true
            ], [
                'name'          => 'caption',
                'title'         => 'Caption',
                'type'          => 'select',
                'options'       => [
                    [
                        'title' => 'Yes',
                        'value' => 'Yes',
                    ], [
                        'title' => 'No',
                        'value' => 'No',
                    ],
                ],
                'channel_based' => true
            ], [
                'name'          => 'caption_type',
                'title'         => 'Caption Type',
                'type'          => 'select',
                'info'          => "'float' and 'over' works with position 'bottom'.",
                'options'       => [
                    [
                        'title' => 'Float',
                        'value' => 'Float',
                    ], [
                        'title' => 'Inside',
                        'value' => 'Inside',
                    ], [
                        'title' => 'Outside',
                        'value' => 'Outside',
                    ], [
                        'title' => 'Over',
                        'value' => 'Over',
                    ],
                ],
                'channel_based' => true
            ], [
                'name'          => 'caption_position',
                'title'         => 'Caption Position',
                'type'          => 'select',
                'options'       => [
                    [
                        'title' => 'Top',
                        'value' => 'Top',
                    ], [
                        'title' => 'Bottom',
                        'value' => 'Bottom',
                    ],
                ],
                'channel_based' => true
            ], [
                'name'          => 'background',
                'title'         => 'Background',
                'type'          => 'select',
                'options'       => [
                    [
                        'title' => 'Dark',
                        'value' => 'Dark',
                    ], [
                        'title' => 'Light',
                        'value' => 'Light',
                    ],
                ],
                'channel_based' => true
            ], [
                'name'          => 'cyclic',
                'title'         => 'Cyclic',
                'type'          => 'select',
                'options'       => [
                    [
                        'title' => 'Yes',
                        'value' => 'Yes',
                    ], [
                        'title' => 'No',
                        'value' => 'No',
                    ],
                ],
                'channel_based' => true
            ], [
                'name'          => 'interval',
                'title'         => 'Interval',
                'type'          => 'text',
                'validation'    => 'between:500,99999',
                'channel_based' => true,
                'locale_based'  => true,
                'info'          => 'Only Numeric Value',
            ], [
                'name'          => 'border',
                'title'         => 'Border',
                'type'          => 'select',
                'options'       => [
                    [
                        'title' => 'Yes',
                        'value' => 'Yes',
                    ], [
                        'title' => 'No',
                        'value' => 'No',
                    ],
                ],
                'channel_based' => true
            ], [
                'name'          => 'slidecount',
                'title'         => 'Slidecount',
                'type'          => 'select',
                'options'       => [
                    [
                        'title' => 'Yes',
                        'value' => 'Yes',
                    ], [
                        'title' => 'No',
                        'value' => 'No',
                    ],
                ],
                'channel_based' => true
            ], [
                'name'          => 'controls',
                'title'         => 'Controls',
                'type'          => 'select',
                'options'       => [
                    [
                        'title' => 'Yes',
                        'value' => 'Yes',
                    ], [
                        'title' => 'No',
                        'value' => 'No',
                    ],
                ],
                'channel_based' => true
            ],
        ],
    ],
];