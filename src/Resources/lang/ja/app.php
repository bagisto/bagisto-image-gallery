<?php

return [   
    'admin' => [
        'configuration' => [
            'image-gallery' => [
                'info'  => 'イメージギャラリー',
                'title' => 'イメージギャラリー',

                'setting' => [
                    'info'  => 'イメージギャラリーのユニットオプションを設定します',
                    'title' => '設定',

                    'image-options' => [
                        'gallery-setting' => 'ギャラリー設定',
                        'info'            => 'オープニングエフェクト、クロージングエフェクト、キャプションなどを設定します',
                        
                        'image-gallery-show' => [
                            'disable' => '無効',
                            'enable'  => '有効',
                            'title'   => 'イメージギャラリー表示',
                        ],

                        'opening-effect' => [
                            'elastic' => '弾性',
                            'fade'    => 'フェード',
                            'none'    => 'なし',
                            'title'   => 'オープニングエフェクト',
                        ],

                        'closing-effect' => [
                            'elastic' => '弾性',
                            'fade'    => 'フェード',
                            'none'    => 'なし',
                            'title'   => 'クロージングエフェクト',
                        ],

                        'caption' => [
                            'no'    => 'いいえ',
                            'title' => 'キャプション',
                            'yes'   => 'はい',
                        ],

                        'caption-type' => [
                            'float'   => 'フロート',
                            'info'    => "'float'と'over'は位置'bottom'と一緒に動作します",
                            'inside'  => 'インサイド',
                            'outside' => 'アウトサイド',
                            'over'    => 'オーバー',
                            'title'   => 'キャプションタイプ',
                        ],

                        'caption-position' => [
                            'bottom' => 'ボトム',
                            'title'  => 'キャプション位置',
                            'top'    => 'トップ',
                        ],

                        'background' => [
                            'dark'  => 'ダーク',
                            'light' => 'ライト',
                            'title' => '背景',
                        ],

                        'cyclic' => [
                            'no'    => 'いいえ',
                            'title' => 'サイクル',
                            'yes'   => 'はい',
                        ],

                        'interval' => [
                            'info'  => '数値のみを入力し、5000から99999の間でなければなりません',
                            'title' => '間隔',
                        ],

                        'border' => [
                            'no'    => 'いいえ',
                            'title' => 'ボーダー',
                            'yes'   => 'はい',
                        ],

                        'slide-count' => [
                            'no'    => 'いいえ',
                            'title' => 'スライド数',
                            'yes'   => 'はい',
                        ],

                        'controls' => [
                            'no'    => 'いいえ',
                            'title' => 'コントロール',
                            'yes'   => 'はい',
                        ],
                    ],
                ],
            ],
        ],

        'layouts' => [
            'image-gallery'  => 'イメージギャラリー',
            'manage-gallery' => 'ギャラリーを管理',
            'manage-groups'  => 'グループを管理',
            'manage-images'  => 'イメージを管理',
        ],

        'image-gallery' => [
            'manage-images' => [
                'index' => [
                    'create' => '画像を追加',
                    'title'  => '画像管理',
                ],

                'create' => [
                    'back-btn'    => '戻る',
                    'description' => '説明',
                    'disable'     => '無効',
                    'enable'      => '有効',
                    'general'     => '一般',
                    'image'       => '画像',
                    'page-title'  => '画像を追加',
                    'save-btn'    => '画像を保存',
                    'sort'        => '並べ替え',
                    'status'      => 'ステータス',
                    'title'       => 'タイトル',
                ],

                'edit' => [
                    'back-btn'    => '戻る',
                    'description' => '説明',
                    'disable'     => '無効',
                    'enable'      => '有効',
                    'general'     => '一般',
                    'image'       => '画像',
                    'page-title'  => '画像を編集',
                    'save-btn'    => '画像を保存',
                    'sort'        => '並べ替え',
                    'status'      => 'ステータス',
                    'title'       => 'タイトル',
                ],

                'create-success'      => '画像が正常に追加されました。',
                'delete-failed'       => '画像を削除できませんでした。',
                'delete-success'      => '画像が正常に削除されました。',
                'image-error'         => '画像が見つかりません。',
                'image-required'      => '画像フィールドは必須です。',
                'mass-delete-success' => '選択された画像が正常に削除されました。',
                'mass-update-success' => '選択された画像が正常に更新されました。',
                'update-success'      => '画像が正常に更新されました。',
            ],

            'manage-gallery' => [
                'index' => [
                    'code-note' => '注意: ギャラリーコードは、スペースや特殊文字を含まない英数字でなければなりません。',
                    'create'    => 'ギャラリー作成',
                    'title'     => 'ギャラリー管理',
                ],

                'create' => [
                    'back-btn'           => '戻る',
                    'description'        => '説明',
                    'disable'            => '無効',
                    'enable'             => '有効',
                    'gallery-code'       => 'ギャラリーコード',
                    'gallery-image'      => 'ギャラリー画像',
                    'gallery'            => 'ギャラリー',
                    'id'                 => 'ID',
                    'image-title'        => '画像タイトル',
                    'page-title'         => 'ギャラリーを追加',
                    'save-btn'           => 'ギャラリーを保存',
                    'sort'               => '並べ替え',
                    'status'             => 'ステータス',
                    'thumbnail-image-id' => 'サムネイル画像ID',
                    'thumbnail'          => 'サムネイル',
                    'title'              => 'タイトル',
                ],

                'edit' => [
                    'back-btn'      => '戻る',
                    'disable'       => '無効',
                    'enable'        => '有効',
                    'gallery-code'  => 'ギャラリーコード',
                    'gallery-image' => 'ギャラリー画像',
                    'gallery'       => 'ギャラリー',
                    'page-title'    => 'ギャラリーを編集',
                    'save-btn'      => 'ギャラリーを保存',
                    'status'        => 'ステータス',
                    'title'         => 'タイトル',
                ],

                'create-success'      => 'ギャラリーが正常に作成されました。',
                'delete-failed'       => 'ギャラリーを削除できませんでした。',
                'delete-success'      => 'ギャラリーが正常に削除されました。',
                'mass-delete-success' => '選択されたギャラリーが正常に削除されました。',
                'mass-update-success' => '選択されたギャラリーが正常に更新されました。',
                'update-success'      => 'ギャラリーが正常に更新されました。',
            ],

            'manage-groups' => [
                'index' => [
                    'code-note' => '注意: グループコードは、スペースや特殊文字を含まない英数字でなければなりません。',
                    'create'    => 'グループ作成',
                    'title'     => 'グループ管理',
                ],

                'create' => [
                    'back-btn'           => '戻る',
                    'disable'            => '無効',
                    'enable'             => '有効',
                    'gallery-code'       => 'ギャラリーコード',
                    'gallery-title'      => 'ギャラリータイトル',
                    'group-code'         => 'グループコード',
                    'group'              => 'グループ',
                    'id'                 => 'ID',
                    'image-ids'          => '画像ID',
                    'page-title'         => 'グループを追加',
                    'save-btn'           => 'グループを保存',
                    'status'             => 'ステータス',
                    'thumbnail-image-id' => 'サムネイル画像ID',
                ],

                'edit' => [
                    'back-btn'      => '戻る',
                    'disable'       => '無効',
                    'enable'        => '有効',
                    'group-code'    => 'グループコード',
                    'group'         => 'グループ',
                    'page-title'    => 'グループを編集',
                    'save-btn'      => 'ギャラリーを保存',
                    'status'        => 'ステータス',
                ],

                'create-success'      => 'グループが正常に作成されました。',
                'delete-failed'       => 'グループを削除できませんでした。',
                'delete-success'      => 'グループが正常に削除されました。',
                'mass-delete-success' => '選択されたグループが正常に削除されました。',
                'mass-update-success' => '選択されたグループが正常に更新されました。',
                'update-success'      => 'グループが正常に更新されました。',
            ],

            'datagrid' => [
                'delete'              => '削除',
                'description'         => '説明',
                'disable'             => '無効', 
                'edit'                => '編集',
                'enable'              => '有効', 
                'gallery-code'        => 'ギャラリーコード',
                'gallery-ids'         => 'ギャラリーID',
                'gallery-title'       => 'ギャラリータイトル',
                'group-code'          => 'グループコード',
                'id'                  => 'ID',
                'image-ids'           => '画像ID',
                'image-title'         => '画像タイトル',
                'sort'                => '並べ替え', 
                'status'              => 'ステータス', 
                'thumbnail-image-id'  => 'サムネイル画像ID',
                'thumbnail'           => 'サムネイル', 
                'update'              => '更新',
            ],
        ],
    ], 

    'shop' => [
       'components' => [
            'categories' => [
                'gallery-description' => '私たちの製品コレクションギャラリーへようこそ。インスピレーションと情報を提供するよう設計された厳選された展示です。各コレクションは、製品のユニークな特徴と利点を強調するよう慎重に組み立てられています。',
                'gallery-heading'     => '製品コレクションギャラリーを探索する',
                'view-gallery'        => 'ギャラリーを見る',
            ],
        ],

        'image-gallery' => [
            'gallery'          => 'ギャラリー',
            'images'           => '画像',
            'no-gallery-found' => 'ギャラリーが見つかりません。',
            'no-image-found'   => '画像が見つかりません。',
            'view-gallery'     => 'ギャラリーを見る',
        ],
    ],
];