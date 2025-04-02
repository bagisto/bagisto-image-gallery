<?php

return [   
    'admin' => [
        'configuration' => [
            'image-gallery' => [
                'info'  => 'معرض الصور',
                'title' => 'معرض الصور',

                'setting' => [
                    'info'  => 'تعيين خيارات الوحدة لمعرض الصور',
                    'title' => 'الإعدادات',

                    'image-options' => [
                        'gallery-setting' => 'إعدادات المعرض',
                        'info'            => 'تعيين تأثير الفتح والإغلاق والتسمية والمزيد.',

                        'image-gallery-show' => [
                            'disable' => 'تعطيل',
                            'enable'  => 'تمكين',
                            'title'   => 'عرض معرض الصور',
                        ],

                        'opening-effect' => [
                            'elastic' => 'مرن',
                            'fade'    => 'تلاشي',
                            'none'    => 'لا شيء',
                            'title'   => 'تأثير الفتح',
                        ],

                        'closing-effect' => [
                            'elastic' => 'مرن',
                            'fade'    => 'تلاشي',
                            'none'    => 'لا شيء',
                            'title'   => 'تأثير الإغلاق',
                        ],

                        'caption' => [
                            'no'    => 'لا',
                            'title' => 'التسمية',
                            'yes'   => 'نعم',
                        ],

                        'caption-type' => [
                            'float'   => 'عائم',
                            'info'    => "'float' و 'over' يعملان مع الوضع 'bottom'.",
                            'inside'  => 'داخل',
                            'outside' => 'خارج',
                            'over'    => 'فوق',
                            'title'   => 'نوع التسمية',
                        ],

                        'caption-position' => [
                            'bottom' => 'أسفل',
                            'title'  => 'موقع التسمية',
                            'top'    => 'أعلى',
                        ],

                        'background' => [
                            'dark'  => 'داكن',
                            'light' => 'فاتح',
                            'title' => 'الخلفية',
                        ],

                        'cyclic' => [
                            'no'    => 'لا',
                            'title' => 'دوري',
                            'yes'   => 'نعم',
                        ],

                        'interval' => [
                            'info'  => 'يجب أن تكون القيم رقمية فقط ويجب أن تكون بين 5000 و 99999',
                            'title' => 'الفاصل الزمني',
                        ],

                        'border' => [
                            'no'    => 'لا',
                            'title' => 'الحدود',
                            'yes'   => 'نعم',
                        ],

                        'slide-count' => [
                            'no'    => 'لا',
                            'title' => 'عدد الشرائح',
                            'yes'   => 'نعم',
                        ],

                        'controls' => [
                            'no'    => 'لا',
                            'title' => 'التحكم',
                            'yes'   => 'نعم',
                        ],
                    ],
                ],
            ],
        ],

        'layouts' => [
            'image-gallery'  => 'معرض الصور',
            'manage-gallery' => 'إدارة المعرض',
            'manage-groups'  => 'إدارة المجموعات',
            'manage-images'  => 'إدارة الصور',
        ],

        'image-gallery' => [
            'manage-images' => [
                'index' => [
                    'create' => 'إضافة صور',
                    'title'  => 'إدارة الصور',
                ],

                'create' => [
                    'back-btn'    => 'رجوع',
                    'description' => 'الوصف',
                    'disable'     => 'تعطيل',
                    'enable'      => 'تمكين',
                    'general'     => 'عام',
                    'image'       => 'صورة',
                    'page-title'  => 'إضافة صور',
                    'save-btn'    => 'حفظ الصور',
                    'sort'        => 'ترتيب',
                    'status'      => 'الحالة',
                    'title'       => 'العنوان',
                ],

                'edit' => [
                    'back-btn'    => 'رجوع',
                    'description' => 'الوصف',
                    'disable'     => 'تعطيل',
                    'enable'      => 'تمكين',
                    'general'     => 'عام',
                    'image'       => 'صورة',
                    'page-title'  => 'تعديل الصور',
                    'save-btn'    => 'حفظ الصور',
                    'sort'        => 'ترتيب',
                    'status'      => 'الحالة',
                    'title'       => 'العنوان',
                ],

                'create-success'      => 'تم إنشاء الصور بنجاح.',
                'delete-failed'       => 'غير قادر على حذف الصور.',
                'delete-success'      => 'تم حذف الصور بنجاح.',
                'image-error'         => 'لم يتم العثور على الصورة.',
                'image-required'      => 'حقل الصورة مطلوب.',
                'mass-delete-success' => 'تم حذف الصور المحددة بنجاح.',
                'mass-update-success' => 'تم تحديث الصور المحددة بنجاح.',
                'update-success'      => 'تم تحديث الصور بنجاح.',
            ],

            'manage-gallery' => [
                'index' => [
                    'code-note' => 'ملاحظة: يجب أن يكون كود المعرض مكونًا من حروف وأرقام فقط دون مسافات أو أحرف خاصة.',
                    'create'    => 'إنشاء معرض',
                    'title'     => 'إدارة المعرض',
                ],

                'create' => [
                    'back-btn'           => 'عودة',
                    'description'        => 'الوصف',
                    'disable'            => 'تعطيل',
                    'enable'             => 'تمكين',
                    'gallery-code'       => 'رمز المعرض',
                    'gallery-image'      => 'صورة المعرض',
                    'gallery'            => 'المعرض',
                    'id'                 => 'المعرف',
                    'image-title'        => 'عنوان الصورة',
                    'page-title'         => 'إضافة معرض',
                    'save-btn'           => 'حفظ المعرض',
                    'sort'               => 'ترتيب',
                    'status'             => 'الحالة',
                    'thumbnail-image-id' => 'معرف الصورة المصغرة',
                    'thumbnail'          => 'الصورة المصغرة',
                    'title'              => 'العنوان',
                ],

                'edit' => [
                    'back-btn'      => 'رجوع',
                    'disable'       => 'تعطيل',
                    'enable'        => 'تمكين',
                    'gallery-code'  => 'كود المعرض',
                    'gallery-image' => 'صورة المعرض',
                    'gallery'       => 'المعرض',
                    'page-title'    => 'تعديل المعرض',
                    'save-btn'      => 'حفظ المعرض',
                    'status'        => 'الحالة',
                    'title'         => 'العنوان',
                ],

                'create-success'      => 'تم إنشاء المعرض بنجاح.',
                'delete-failed'       => 'غير قادر على حذف المعرض.',
                'delete-success'      => 'تم حذف المعرض بنجاح.',
                'mass-delete-success' => 'تم حذف المعرض المحدد بنجاح.',
                'mass-update-success' => 'تم تحديث المعرض المحدد بنجاح.',
                'update-success'      => 'تم تحديث المعرض بنجاح.',
            ],

            'manage-groups' => [
                'index' => [
                    'code-note' => 'ملاحظة: يجب أن يكون كود المجموعة مكونًا من حروف وأرقام فقط دون مسافات أو أحرف خاصة.',
                    'create'    => 'إنشاء مجموعات',
                    'title'     => 'إدارة المجموعات',
                ],

                'create' => [
                    'back-btn'           => 'عودة',
                    'disable'            => 'تعطيل',
                    'enable'             => 'تمكين',
                    'gallery-code'       => 'رمز المعرض',
                    'gallery-title'      => 'عنوان المعرض',
                    'group-code'         => 'رمز المجموعة',
                    'group'              => 'المجموعة',
                    'id'                 => 'المعرف',
                    'image-ids'          => 'معرفات الصور',
                    'page-title'         => 'إضافة مجموعة',
                    'save-btn'           => 'حفظ المجموعة',
                    'status'             => 'الحالة',
                    'thumbnail-image-id' => 'معرف الصورة المصغرة',
                ],

                'edit' => [
                    'back-btn'      => 'رجوع',
                    'disable'       => 'تعطيل',
                    'enable'        => 'تمكين',
                    'group-code'    => 'كود المجموعة',
                    'group'         => 'المجموعة',
                    'page-title'    => 'تحرير المعرض',
                    'save-btn'      => 'حفظ المعرض',
                    'status'        => 'الحالة',
                ],

                'create-success'      => 'تم إنشاء المجموعات بنجاح.',
                'delete-failed'       => 'غير قادر على حذف المجموعة.',
                'delete-success'      => 'تم حذف المجموعة بنجاح.',
                'mass-delete-success' => 'تم حذف المجموعات المحددة بنجاح.',
                'mass-update-success' => 'تم تحديث المجموعات المحددة بنجاح.',
                'update-success'      => 'تم تحديث المجموعات بنجاح.',
            ],

            'datagrid' => [
                'delete'              => 'حذف',
                'description'         => 'الوصف',
                'disable'             => 'تعطيل', 
                'edit'                => 'تحرير',
                'enable'              => 'تمكين', 
                'gallery-code'        => 'كود المعرض',
                'gallery-ids'         => 'هويات المعرض',
                'gallery-title'       => 'عنوان المعرض',
                'group-code'          => 'كود المجموعة',
                'id'                  => 'الهوية',
                'image-ids'           => 'هويات الصور',
                'image-title'         => 'عنوان الصورة',
                'sort'                => 'الترتيب', 
                'status'              => 'الحالة' , 
                'thumbnail-image-id'  => 'هوية الصورة المصغرة',
                'thumbnail'           => 'الصورة المصغرة', 
                'update'              => 'تحديث',
            ],
        ],
    ], 

    'shop' => [
       'components' => [
            'categories' => [
                'gallery-description' => 'مرحبًا بكم في معرض مجموعة المنتجات لدينا، وهو معرض منسق مصمم للإلهام والإعلام. تم تجميع كل مجموعة بعناية لتسليط الضوء على الميزات والفوائد الفريدة لمنتجاتنا',
                'gallery-heading'     => 'استكشف معرض مجموعة المنتجات',
                'view-gallery'        => 'عرض المعرض',
            ],
        ],

        'image-gallery' => [
            'gallery'          => 'المعرض',
            'images'           => 'الصور',
            'no-gallery-found' => 'لا تتوفر معرض صور.',
            'no-image-found'   => 'لا تتوفر صورة.',
            'view-gallery'     => 'عرض المعرض',
        ],
    ],
];