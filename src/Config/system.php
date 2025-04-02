<?php

return [
    [
        'key'  => 'image',
        'name' => 'image-gallery::app.admin.configuration.image-gallery.title',
        'info' => 'image-gallery::app.admin.configuration.image-gallery.info',
        'sort' => 1,
    ], [
        'key'  => 'image.setting',
        'name' => 'image-gallery::app.admin.configuration.image-gallery.setting.title',
        'info' => 'image-gallery::app.admin.configuration.image-gallery.setting.info',
        'icon' => 'settings/settings.svg',
        'sort' => 1,
    ], [
        'key'    => 'image.setting.image-options',
        'name'   => 'image-gallery::app.admin.configuration.image-gallery.setting.image-options.gallery-setting',
        'info'   => 'image-gallery::app.admin.configuration.image-gallery.setting.image-options.info',
        'sort'   => 1,
        'fields' => [
            [
                'name'          => 'status',
                'title'         => 'image-gallery::app.admin.configuration.image-gallery.setting.image-options.image-gallery-show.title',
                'type'          => 'boolean',
                'channel_based' => true,
                'locale_based'  => true,
            ], [
                'name'    => 'caption',
                'title'   => 'image-gallery::app.admin.configuration.image-gallery.setting.image-options.caption.title',
                'type'    => 'select',
                'options' => [
                    [
                        'title' => 'image-gallery::app.admin.configuration.image-gallery.setting.image-options.caption.yes',
                        'value' => 'Yes',
                    ], [
                        'title' => 'image-gallery::app.admin.configuration.image-gallery.setting.image-options.caption.no',
                        'value' => 'No',
                    ],
                ],
                'channel_based' => true,
                'locale_based'  => true,
            ], [
                'name'    => 'caption-type',
                'title'   => 'image-gallery::app.admin.configuration.image-gallery.setting.image-options.caption-type.title',
                'type'    => 'select',
                'info'    => "image-gallery::app.admin.configuration.image-gallery.setting.image-options.caption-type.info",
                'options' => [
                    [
                        'title' => 'image-gallery::app.admin.configuration.image-gallery.setting.image-options.caption-type.float',
                        'value' => 'Float',
                    ], [
                        'title' => 'image-gallery::app.admin.configuration.image-gallery.setting.image-options.caption-type.inside',
                        'value' => 'Inside',
                    ], [
                        'title' => 'image-gallery::app.admin.configuration.image-gallery.setting.image-options.caption-type.outside',
                        'value' => 'Outside',
                    ], [
                        'title' => 'image-gallery::app.admin.configuration.image-gallery.setting.image-options.caption-type.over',
                        'value' => 'Over',
                    ],
                ],
                'channel_based' => true,
                'locale_based'  => true,
            ], [
                'name'          => 'caption-position',
                'title'         => 'image-gallery::app.admin.configuration.image-gallery.setting.image-options.caption-position.title',
                'type'          => 'select',
                'options'       => [
                    [
                        'title' => 'image-gallery::app.admin.configuration.image-gallery.setting.image-options.caption-position.top',
                        'value' => 'Top',
                    ], [
                        'title' => 'image-gallery::app.admin.configuration.image-gallery.setting.image-options.caption-position.bottom',
                        'value' => 'Bottom',
                    ],
                ],
                'channel_based' => true,
                'locale_based'  => true,
            ], [
                'name'          => 'background',
                'title'         => 'image-gallery::app.admin.configuration.image-gallery.setting.image-options.background.title',
                'type'          => 'select',
                'options'       => [
                    [
                        'title' => 'image-gallery::app.admin.configuration.image-gallery.setting.image-options.background.dark',
                        'value' => 'Dark',
                    ], [
                        'title' => 'image-gallery::app.admin.configuration.image-gallery.setting.image-options.background.light',
                        'value' => 'Light',
                    ],
                ],
                'channel_based' => true,
                'locale_based'  => true,
            ], [
                'name'          => 'interval',
                'title'         => 'image-gallery::app.admin.configuration.image-gallery.setting.image-options.interval.title',
                'type'          => 'number',
                'validation'    => 'required',
                'info'          => 'image-gallery::app.admin.configuration.image-gallery.setting.image-options.interval.info',
                'channel_based' => true,
                'locale_based'  => true,
            ], [
                'name'          => 'border',
                'title'         => 'image-gallery::app.admin.configuration.image-gallery.setting.image-options.border.title',
                'type'          => 'select',
                'options'       => [
                    [
                        'title' => 'image-gallery::app.admin.configuration.image-gallery.setting.image-options.border.yes',
                        'value' => 'Yes',
                    ], [
                        'title' => 'image-gallery::app.admin.configuration.image-gallery.setting.image-options.border.no',
                        'value' => 'No',
                    ],
                ],
                'channel_based' => true,
                'locale_based'  => true,
            ], [
                'name'          => 'slide-count',
                'title'         => 'image-gallery::app.admin.configuration.image-gallery.setting.image-options.slide-count.title',
                'type'          => 'select',
                'options'       => [
                    [
                        'title' => 'image-gallery::app.admin.configuration.image-gallery.setting.image-options.slide-count.yes',
                        'value' => 'Yes',
                    ], [
                        'title' => 'image-gallery::app.admin.configuration.image-gallery.setting.image-options.slide-count.no',
                        'value' => 'No',
                    ],
                ],
                'channel_based' => true,
                'locale_based'  => true,
            ], [
                'name'          => 'controls',
                'title'         => 'image-gallery::app.admin.configuration.image-gallery.setting.image-options.controls.title',
                'type'          => 'select',
                'options'       => [
                    [
                        'title' => 'image-gallery::app.admin.configuration.image-gallery.setting.image-options.controls.yes',
                        'value' => 'Yes',
                    ], [
                        'title' => 'image-gallery::app.admin.configuration.image-gallery.setting.image-options.controls.no',
                        'value' => 'No',
                    ],
                ],
                'channel_based' => true,
                'locale_based'  => true,
            ],
        ],
    ],
];