<?php

return [   
    'admin' => [
        'configuration' => [
            'image-gallery' => [
                'info'  => '图库',
                'title' => '图库',

                'setting' => [
                    'info'  => '为图库设置单元选项',
                    'title' => '设置',

                    'image-options' => [
                        'gallery-setting' => '图库设置',
                        'info'            => '设置开启效果、关闭效果、标题等。',
                        
                        'image-gallery-show' => [
                            'disable' => '禁用',
                            'enable'  => '启用',
                            'title'   => '图库展示',
                        ],

                        'opening-effect' => [
                            'elastic' => '弹性',
                            'fade'    => '淡入',
                            'none'    => '无',
                            'title'   => '开启效果',
                        ],

                        'closing-effect' => [
                            'elastic' => '弹性',
                            'fade'    => '淡出',
                            'none'    => '无',
                            'title'   => '关闭效果',
                        ],

                        'caption' => [
                            'no'    => '否',
                            'title' => '标题',
                            'yes'   => '是',
                        ],

                        'caption-type' => [
                            'float'   => '浮动',
                            'info'    => "'float'和'over'只能在'bottom'位置使用。",
                            'inside'  => '内部',
                            'outside' => '外部',
                            'over'    => '覆盖',
                            'title'   => '标题类型',
                        ],

                        'caption-position' => [
                            'bottom' => '底部',
                            'title'  => '标题位置',
                            'top'    => '顶部',
                        ],

                        'background' => [
                            'dark'  => '深色',
                            'light' => '浅色',
                            'title' => '背景',
                        ],

                        'cyclic' => [
                            'no'    => '否',
                            'title' => '循环',
                            'yes'   => '是',
                        ],

                        'interval' => [
                            'info'  => '仅限数字值，且必须在5000到99999之间',
                            'title' => '间隔',
                        ],

                        'border' => [
                            'no'    => '否',
                            'title' => '边框',
                            'yes'   => '是',
                        ],

                        'slide-count' => [
                            'no'    => '否',
                            'title' => '幻灯片计数',
                            'yes'   => '是',
                        ],

                        'controls' => [
                            'no'    => '否',
                            'title' => '控制器',
                            'yes'   => '是',
                        ],
                    ],
                ],
            ],
        ],

        'layouts' => [
            'image-gallery'  => '图库',
            'manage-gallery' => '管理图库',
            'manage-groups'  => '管理分组',
            'manage-images'  => '管理图片',
        ],

        'image-gallery' => [
            'manage-images' => [
                'index' => [
                    'create' => '添加图片',
                    'title'  => '管理图片',
                ],

                'create' => [
                    'back-btn'    => '返回',
                    'description' => '描述',
                    'disable'     => '禁用',
                    'enable'      => '启用',
                    'general'     => '通用',
                    'image'       => '图片',
                    'page-title'  => '添加图片',
                    'save-btn'    => '保存图片',
                    'sort'        => '排序',
                    'status'      => '状态',
                    'title'       => '标题',
                ],

                'edit' => [
                    'back-btn'    => '返回',
                    'description' => '描述',
                    'disable'     => '禁用',
                    'enable'      => '启用',
                    'general'     => '通用',
                    'image'       => '图片',
                    'page-title'  => '编辑图片',
                    'save-btn'    => '保存图片',
                    'sort'        => '排序',
                    'status'      => '状态',
                    'title'       => '标题',
                ],

                'create-success'      => '图片创建成功。',
                'delete-failed'       => '无法删除图片。',
                'delete-success'      => '图片删除成功。',
                'image-error'         => '图片未找到。',
                'image-required'      => '图片字段为必填。',
                'mass-delete-success' => '所选图片删除成功。',
                'mass-update-success' => '所选图片更新成功。',
                'update-success'      => '图片更新成功。',
            ],

            'manage-gallery' => [
                'index' => [
                    'code-note' => '注意：画廊代码必须是字母数字且不能包含空格或特殊字符。',
                    'create'    => '创建画廊',
                    'title'     => '管理画廊',
                ],

                'create' => [
                    'back-btn'           => '返回',
                    'description'        => '描述',
                    'disable'            => '禁用',
                    'enable'             => '启用',
                    'gallery-code'       => '画廊代码',
                    'gallery-image'      => '画廊图片',
                    'gallery'            => '画廊',
                    'id'                 => 'ID',
                    'image-title'        => '图片标题',
                    'page-title'         => '添加画廊',
                    'save-btn'           => '保存画廊',
                    'sort'               => '排序',
                    'status'             => '状态',
                    'thumbnail-image-id' => '缩略图ID',
                    'thumbnail'          => '缩略图',
                    'title'              => '标题',
                ],

                'edit' => [
                    'back-btn'      => '返回',
                    'disable'       => '禁用',
                    'enable'        => '启用',
                    'gallery-code'  => '画廊代码',
                    'gallery-image' => '画廊图片',
                    'gallery'       => '画廊',
                    'page-title'    => '编辑画廊',
                    'save-btn'      => '保存画廊',
                    'status'        => '状态',
                    'title'         => '标题',
                ],

                'create-success'      => '画廊创建成功。',
                'delete-failed'       => '无法删除画廊。',
                'delete-success'      => '画廊删除成功。',
                'mass-delete-success' => '所选画廊删除成功。',
                'mass-update-success' => '所选画廊更新成功。',
                'update-success'      => '画廊更新成功。',
            ],

            'manage-groups' => [
                'index' => [
                    'code-note' => '注意：组代码必须是字母数字且不能包含空格或特殊字符。',
                    'create'    => '创建分组',
                    'title'     => '管理分组',
                ],

                'create' => [
                    'back-btn'           => '返回',
                    'disable'            => '禁用',
                    'enable'             => '启用',
                    'gallery-code'       => '画廊代码',
                    'gallery-title'      => '画廊标题',
                    'group-code'         => '分组代码',
                    'group'              => '分组',
                    'id'                 => 'ID',
                    'image-ids'          => '图片ID',
                    'page-title'         => '添加分组',
                    'save-btn'           => '保存分组',
                    'status'             => '状态',
                    'thumbnail-image-id' => '缩略图ID',
                ],

                'edit' => [
                    'back-btn'      => '返回',
                    'disable'       => '禁用',
                    'enable'        => '启用',
                    'group-code'    => '分组代码',
                    'group'         => '分组',
                    'page-title'    => '编辑分组',
                    'save-btn'      => '保存分组',
                    'status'        => '状态',
                ],

                'create-success'      => '分组创建成功。',
                'delete-failed'       => '无法删除分组。',
                'delete-success'      => '分组删除成功。',
                'mass-delete-success' => '所选分组删除成功。',
                'mass-update-success' => '所选分组更新成功。',
                'update-success'      => '分组更新成功。',
            ],

            'datagrid' => [
                'delete'              => '删除',
                'description'         => '描述',
                'disable'             => '禁用', 
                'edit'                => '编辑',
                'enable'              => '启用', 
                'gallery-code'        => '画廊代码',
                'gallery-ids'         => '画廊ID',
                'gallery-title'       => '画廊标题',
                'group-code'          => '分组代码',
                'id'                  => 'ID',
                'image-ids'           => '图片ID',
                'image-title'         => '图片标题',
                'sort'                => '排序', 
                'status'              => '状态', 
                'thumbnail-image-id'  => '缩略图ID',
                'thumbnail'           => '缩略图', 
                'update'              => '更新',
            ],
        ],
    ], 

    'shop' => [
       'components' => [
            'categories' => [
                'gallery-description' => '欢迎来到我们的产品收藏画廊，这是一个经过精心策划的展示，旨在启发和提供信息。每个系列都经过精心组装，以突出我们产品的独特功能和优势。',
                'gallery-heading'     => '探索产品收藏画廊',
                'view-gallery'        => '查看图库',
            ],
        ],

        'image-gallery' => [
            'gallery'          => '图库',
            'images'           => '图片',
            'no-gallery-found' => '没有找到画廊。',
            'no-image-found'   => '没有找到图片。',
            'view-gallery'     => '查看图库',
        ],
    ],
];