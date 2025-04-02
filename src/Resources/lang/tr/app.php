<?php

return [   
    'admin' => [
        'configuration' => [
            'image-gallery' => [
                'info'  => 'Resim Galerisi',
                'title' => 'Resim Galerisi',

                'setting' => [
                    'info'  => 'Resim galerisi için birim seçeneklerini ayarlayın',
                    'title' => 'Ayar',

                    'image-options' => [
                        'gallery-setting' => 'Galeri Ayarları',
                        'info'            => 'Açılış efekti, kapanış efekti, başlık ve daha fazlasını ayarlayın.',

                        'image-gallery-show' => [
                            'disable' => 'Devre Dışı Bırak',
                            'enable'  => 'Etkinleştir',
                            'title'   => 'Resim Galerisi Göster',
                        ],

                        'opening-effect' => [
                            'elastic' => 'Elastik',
                            'fade'    => 'Solma',
                            'none'    => 'Hiçbiri',
                            'title'   => 'Açılış Efekti',
                        ],

                        'closing-effect' => [
                            'elastic' => 'Elastik',
                            'fade'    => 'Solma',
                            'none'    => 'Hiçbiri',
                            'title'   => 'Kapanış Efekti',
                        ],

                        'caption' => [
                            'no'    => 'Hayır',
                            'title' => 'Altyazı',
                            'yes'   => 'Evet',
                        ],

                        'caption-type' => [
                            'float'   => 'Yüzmek',
                            'info'    => "'float' ve 'over' pozisyon 'bottom' ile çalışır.",
                            'inside'  => 'İçeride',
                            'outside' => 'Dışarıda',
                            'over'    => 'Üzerinde',
                            'title'   => 'Altyazı Türü',
                        ],

                        'caption-position' => [
                            'bottom' => 'Alt',
                            'title'  => 'Altyazı Pozisyonu',
                            'top'    => 'Üst',
                        ],

                        'background' => [
                            'dark'  => 'Koyu',
                            'light' => 'Açık',
                            'title' => 'Arka Plan',
                        ],

                        'cyclic' => [
                            'no'    => 'Hayır',
                            'title' => 'Döngüsel',
                            'yes'   => 'Evet',
                        ],

                        'interval' => [
                            'info'  => 'Yalnızca sayısal değerler olmalı ve 5000 ile 99999 arasında olmalı',
                            'title' => 'Aralık',
                        ],

                        'border' => [
                            'no'    => 'Hayır',
                            'title' => 'Sınır',
                            'yes'   => 'Evet',
                        ],

                        'slide-count' => [
                            'no'    => 'Hayır',
                            'title' => 'Slayt Sayısı',
                            'yes'   => 'Evet',
                        ],

                        'controls' => [
                            'no'    => 'Hayır',
                            'title' => 'Kontroller',
                            'yes'   => 'Evet',
                        ],
                    ],
                ],
            ],
        ],

        'layouts' => [
            'image-gallery'  => 'Resim Galerisi',
            'manage-gallery' => 'Galeriyi Yönet',
            'manage-groups'  => 'Grupları Yönet',
            'manage-images'  => 'Resimleri Yönet',
        ],

        'image-gallery' => [
            'manage-images' => [
                'index' => [
                    'create' => 'Görsel Ekle',
                    'title'  => 'Görselleri Yönet',
                ],

                'create' => [
                    'back-btn'    => 'Geri',
                    'description' => 'Açıklama',
                    'disable'     => 'Devre Dışı Bırak',
                    'enable'      => 'Etkinleştir',
                    'general'     => 'Genel',
                    'image'       => 'Görsel',
                    'page-title'  => 'Görsel Ekle',
                    'save-btn'    => 'Görselleri Kaydet',
                    'sort'        => 'Sırala',
                    'status'      => 'Durum',
                    'title'       => 'Başlık',
                ],

                'edit' => [
                    'back-btn'    => 'Geri',
                    'description' => 'Açıklama',
                    'disable'     => 'Devre Dışı Bırak',
                    'enable'      => 'Etkinleştir',
                    'general'     => 'Genel',
                    'image'       => 'Görsel',
                    'page-title'  => 'Görseli Düzenle',
                    'save-btn'    => 'Görselleri Kaydet',
                    'sort'        => 'Sırala',
                    'status'      => 'Durum',
                    'title'       => 'Başlık',
                ],

                'create-success'      => 'Görseller başarıyla eklendi.',
                'delete-failed'       => 'Görseller silinemedi.',
                'delete-success'      => 'Görseller başarıyla silindi.',
                'image-error'         => 'Görsel bulunamadı.',
                'image-required'      => 'Görsel alanı gereklidir.',
                'mass-delete-success' => 'Seçilen görseller başarıyla silindi.',
                'mass-update-success' => 'Seçilen görseller başarıyla güncellendi.',
                'update-success'      => 'Görseller başarıyla güncellendi.',
            ],

            'manage-gallery' => [
                'index' => [
                    'code-note' => 'Not: Galeri kodu boşluk veya özel karakterler olmadan alfanümerik olmalıdır.',
                    'create'    => 'Galeriyi Oluştur',
                    'title'     => 'Galeriyi Yönet',
                ],

                'create' => [
                    'back-btn'           => 'Geri',
                    'description'        => 'Açıklama',
                    'disable'            => 'Devre Dışı Bırak',
                    'enable'             => 'Etkinleştir',
                    'gallery-code'       => 'Galeri Kodu',
                    'gallery-image'      => 'Galeri Görseli',
                    'gallery'            => 'Galeri',
                    'id'                 => 'ID',
                    'image-title'        => 'Görsel Başlığı',
                    'page-title'         => 'Galeri Ekle',
                    'save-btn'           => 'Galeriyi Kaydet',
                    'sort'               => 'Sırala',
                    'status'             => 'Durum',
                    'thumbnail-image-id' => 'Küçük Resim ID',
                    'thumbnail'          => 'Küçük Resim',
                    'title'              => 'Başlık',
                ],

                'edit' => [
                    'back-btn'      => 'Geri',
                    'disable'       => 'Devre Dışı Bırak',
                    'enable'        => 'Etkinleştir',
                    'gallery-code'  => 'Galeri Kodu',
                    'gallery-image' => 'Galeri Görseli',
                    'gallery'       => 'Galeri',
                    'page-title'    => 'Galeriyi Düzenle',
                    'save-btn'      => 'Galeriyi Kaydet',
                    'status'        => 'Durum',
                    'title'         => 'Başlık',
                ],

                'create-success'      => 'Galeri başarıyla oluşturuldu.',
                'delete-failed'       => 'Galeri silinemedi.',
                'delete-success'      => 'Galeri başarıyla silindi.',
                'mass-delete-success' => 'Seçilen galeriler başarıyla silindi.',
                'mass-update-success' => 'Seçilen galeriler başarıyla güncellendi.',
                'update-success'      => 'Galeri başarıyla güncellendi.',
            ],

            'manage-groups' => [
                'index' => [
                    'code-note' => 'Not: Grup kodu boşluk veya özel karakterler olmadan alfanümerik olmalıdır.',
                    'create'    => 'Gruplar Oluştur',
                    'title'     => 'Grupları Yönet',
                ],

                'create' => [
                    'back-btn'           => 'Geri',
                    'disable'            => 'Devre Dışı Bırak',
                    'enable'             => 'Etkinleştir',
                    'gallery-code'       => 'Galeri Kodu',
                    'gallery-title'      => 'Galeri Başlığı',
                    'group-code'         => 'Grup Kodu',
                    'group'              => 'Grup',
                    'id'                 => 'ID',
                    'image-ids'          => 'Görsel ID\'leri',
                    'page-title'         => 'Grup Ekle',
                    'save-btn'           => 'Grubu Kaydet',
                    'status'             => 'Durum',
                    'thumbnail-image-id' => 'Küçük Resim ID',
                ],

                'edit' => [
                    'back-btn'      => 'Geri',
                    'disable'       => 'Devre Dışı Bırak',
                    'enable'        => 'Etkinleştir',
                    'group-code'    => 'Grup Kodu',
                    'group'         => 'Grup',
                    'page-title'    => 'Grubu Düzenle',
                    'save-btn'      => 'Grubu Kaydet',
                    'status'        => 'Durum',
                ],

                'create-success'      => 'Gruplar başarıyla oluşturuldu.',
                'delete-failed'       => 'Grup silinemedi.',
                'delete-success'      => 'Grup başarıyla silindi.',
                'mass-delete-success' => 'Seçilen gruplar başarıyla silindi.',
                'mass-update-success' => 'Seçilen gruplar başarıyla güncellendi.',
                'update-success'      => 'Gruplar başarıyla güncellendi.',
            ],

            'datagrid' => [
                'delete'              => 'Sil',
                'description'         => 'Açıklama',
                'disable'             => 'Devre Dışı Bırak', 
                'edit'                => 'Düzenle',
                'enable'              => 'Etkinleştir', 
                'gallery-code'        => 'Galeri Kodu',
                'gallery-ids'         => 'Galeri ID\'leri',
                'gallery-title'       => 'Galeri Başlığı',
                'group-code'          => 'Grup Kodu',
                'id'                  => 'ID',
                'image-ids'           => 'Görsel ID\'leri',
                'image-title'         => 'Görsel Başlığı',
                'sort'                => 'Sırala', 
                'status'              => 'Durum', 
                'thumbnail-image-id'  => 'Küçük Resim ID',
                'thumbnail'           => 'Küçük Resim', 
                'update'              => 'Güncelle',
            ],
        ],
    ], 

    'shop' => [
       'components' => [
            'categories' => [
                'gallery-description' => 'Ürün Koleksiyon Galerimize hoş geldiniz, ilham vermek ve bilgilendirmek için tasarlanmış özenle seçilmiş bir vitrin. Her koleksiyon, ürünlerimizin benzersiz özelliklerini ve faydalarını vurgulamak için özenle bir araya getirilmiştir.',
                'gallery-heading'     => 'Ürün Koleksiyon Galerisini Keşfedin',
                'view-gallery'        => 'Galeriyi Görüntüle',
            ],
        ],

        'image-gallery' => [
            'gallery'          => 'Galeri',
            'images'           => 'Resimler',
            'no-gallery-found' => 'Galeri bulunamadı.',
            'no-image-found'   => 'Görsel bulunamadı.',
            'view-gallery'     => 'Galeriyi Görüntüle',
        ],
    ],
];