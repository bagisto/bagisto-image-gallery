<?php

return [   
    'admin' => [
        'configuration' => [
            'image-gallery' => [
                'info'  => 'گالری تصاویر',
                'title' => 'گالری تصاویر',

                'setting' => [
                    'info'  => 'تنظیم گزینه‌های واحد برای گالری تصاویر',
                    'title' => 'تنظیمات',

                    'image-options' => [
                        'gallery-setting' => 'تنظیمات گالری',
                        'info'            => 'تنظیم اثر باز و بسته شدن، عنوان و موارد دیگر.',

                        'image-gallery-show' => [
                            'disable' => 'غیرفعال',
                            'enable'  => 'فعال',
                            'title'   => 'نمایش گالری تصاویر',
                        ],

                        'opening-effect' => [
                            'elastic' => 'الاستیک',
                            'fade'    => 'محو',
                            'none'    => 'بدون',
                            'title'   => 'اثر باز شدن',
                        ],

                        'closing-effect' => [
                            'elastic' => 'الاستیک',
                            'fade'    => 'محو',
                            'none'    => 'بدون',
                            'title'   => 'اثر بسته شدن',
                        ],

                        'caption' => [
                            'no'    => 'خیر',
                            'title' => 'عنوان',
                            'yes'   => 'بله',
                        ],

                        'caption-type' => [
                            'float'   => 'شناور',
                            'info'    => "'float' و 'over' با موقعیت 'پایین' کار می‌کند.",
                            'inside'  => 'داخل',
                            'outside' => 'خارج',
                            'over'    => 'روی',
                            'title'   => 'نوع عنوان',
                        ],

                        'caption-position' => [
                            'bottom' => 'پایین',
                            'title'  => 'موقعیت عنوان',
                            'top'    => 'بالا',
                        ],

                        'background' => [
                            'dark'  => 'تاریک',
                            'light' => 'روشن',
                            'title' => 'پس زمینه',
                        ],

                        'cyclic' => [
                            'no'    => 'خیر',
                            'title' => 'چرخشی',
                            'yes'   => 'بله',
                        ],

                        'interval' => [
                            'info'  => 'فقط مقادیر عددی و باید بین 5000 تا 99999 باشد',
                            'title' => 'فاصله زمانی',
                        ],

                        'border' => [
                            'no'    => 'خیر',
                            'title' => 'حاشیه',
                            'yes'   => 'بله',
                        ],

                        'slide-count' => [
                            'no'    => 'خیر',
                            'title' => 'تعداد اسلایدها',
                            'yes'   => 'بله',
                        ],

                        'controls' => [
                            'no'    => 'خیر',
                            'title' => 'کنترل‌ها',
                            'yes'   => 'بله',
                        ],
                    ],
                ],
            ],
        ],

        'layouts' => [
            'image-gallery'  => 'گالری تصاویر',
            'manage-gallery' => 'مدیریت گالری',
            'manage-groups'  => 'مدیریت گروه‌ها',
            'manage-images'  => 'مدیریت تصاویر',
        ],

        'image-gallery' => [
            'manage-images' => [
                'index' => [
                    'create' => 'افزودن تصاویر',
                    'title'  => 'مدیریت تصاویر',
                ],

                'create' => [
                    'back-btn'    => 'بازگشت',
                    'description' => 'توضیحات',
                    'disable'     => 'غیرفعال',
                    'enable'      => 'فعال',
                    'general'     => 'عمومی',
                    'image'       => 'تصویر',
                    'page-title'  => 'افزودن تصاویر',
                    'save-btn'    => 'ذخیره تصاویر',
                    'sort'        => 'مرتب‌سازی',
                    'status'      => 'وضعیت',
                    'title'       => 'عنوان',
                ],

                'edit' => [
                    'back-btn'    => 'بازگشت',
                    'description' => 'توضیحات',
                    'disable'     => 'غیرفعال',
                    'enable'      => 'فعال',
                    'general'     => 'عمومی',
                    'image'       => 'تصویر',
                    'page-title'  => 'ویرایش تصاویر',
                    'save-btn'    => 'ذخیره تصاویر',
                    'sort'        => 'مرتب‌سازی',
                    'status'      => 'وضعیت',
                    'title'       => 'عنوان',
                ],

                'create-success'      => 'تصاویر با موفقیت ایجاد شد.',
                'delete-failed'       => 'حذف تصاویر امکان‌پذیر نبود.',
                'delete-success'      => 'تصاویر با موفقیت حذف شد.',
                'image-error'         => 'تصویر پیدا نشد.',
                'image-required'      => 'فیلد تصویر الزامی است.',
                'mass-delete-success' => 'تصاویر انتخاب‌شده با موفقیت حذف شد.',
                'mass-update-success' => 'تصاویر انتخاب‌شده با موفقیت به‌روز شد.',
                'update-success'      => 'تصاویر با موفقیت به‌روز شد.',
            ],

            'manage-gallery' => [
                'index' => [
                    'code-note' => 'توجه: کد گالری باید الفبایی-عددی باشد و نباید شامل فاصله یا کاراکترهای ویژه باشد.',
                    'create'    => 'ایجاد گالری',
                    'title'     => 'مدیریت گالری',
                ],

                'create' => [
                    'back-btn'           => 'بازگشت',
                    'description'        => 'توضیحات',
                    'disable'            => 'غیرفعال',
                    'enable'             => 'فعال',
                    'gallery-code'       => 'کد گالری',
                    'gallery-image'      => 'تصویر گالری',
                    'gallery'            => 'گالری',
                    'id'                 => 'شناسه',
                    'image-title'        => 'عنوان تصویر',
                    'page-title'         => 'افزودن گالری',
                    'save-btn'           => 'ذخیره گالری',
                    'sort'               => 'مرتب‌سازی',
                    'status'             => 'وضعیت',
                    'thumbnail-image-id' => 'شناسه تصویر بندانگشتی',
                    'thumbnail'          => 'تصویر بندانگشتی',
                    'title'              => 'عنوان',
                ],

                'edit' => [
                    'back-btn'      => 'بازگشت',
                    'disable'       => 'غیرفعال',
                    'enable'        => 'فعال',
                    'gallery-code'  => 'کد گالری',
                    'gallery-image' => 'تصویر گالری',
                    'gallery'       => 'گالری',
                    'page-title'    => 'ویرایش گالری',
                    'save-btn'      => 'ذخیره گالری',
                    'status'        => 'وضعیت',
                    'title'         => 'عنوان',
                ],

                'create-success'      => 'گالری با موفقیت ایجاد شد.',
                'delete-failed'       => 'حذف گالری امکان‌پذیر نبود.',
                'delete-success'      => 'گالری با موفقیت حذف شد.',
                'mass-delete-success' => 'گالری‌های انتخاب‌شده با موفقیت حذف شد.',
                'mass-update-success' => 'گالری‌های انتخاب‌شده با موفقیت به‌روز شد.',
                'update-success'      => 'گالری با موفقیت به‌روز شد.',
            ],

            'manage-groups' => [
                'index' => [
                    'code-note' => 'توجه: کد گروه باید الفبایی-عددی باشد و نباید شامل فاصله یا کاراکترهای ویژه باشد.',
                    'create'    => 'ایجاد گروه‌ها',
                    'title'     => 'مدیریت گروه‌ها',
                ],

                'create' => [
                    'back-btn'           => 'بازگشت',
                    'disable'            => 'غیرفعال',
                    'enable'             => 'فعال',
                    'gallery-code'       => 'کد گالری',
                    'gallery-title'      => 'عنوان گالری',
                    'group-code'         => 'کد گروه',
                    'group'              => 'گروه',
                    'id'                 => 'شناسه',
                    'image-ids'          => 'شناسه‌های تصویر',
                    'page-title'         => 'افزودن گروه',
                    'save-btn'           => 'ذخیره گروه',
                    'status'             => 'وضعیت',
                    'thumbnail-image-id' => 'شناسه تصویر بندانگشتی',
                ],

                'edit' => [
                    'back-btn'      => 'بازگشت',
                    'disable'       => 'غیرفعال',
                    'enable'        => 'فعال',
                    'group-code'    => 'کد گروه',
                    'group'         => 'گروه',
                    'page-title'    => 'ویرایش گروه',
                    'save-btn'      => 'ذخیره گالری',
                    'status'        => 'وضعیت',
                ],

                'create-success'      => 'گروه‌ها با موفقیت ایجاد شد.',
                'delete-failed'       => 'حذف گروه امکان‌پذیر نبود.',
                'delete-success'      => 'گروه با موفقیت حذف شد.',
                'mass-delete-success' => 'گروه‌های انتخاب‌شده با موفقیت حذف شد.',
                'mass-update-success' => 'گروه‌های انتخاب‌شده با موفقیت به‌روز شد.',
                'update-success'      => 'گروه با موفقیت به‌روز شد.',
            ],

            'datagrid' => [
                'delete'              => 'حذف',
                'description'         => 'توضیحات',
                'disable'             => 'غیرفعال', 
                'edit'                => 'ویرایش',
                'enable'              => 'فعال', 
                'gallery-code'        => 'کد گالری',
                'gallery-ids'         => 'شناسه‌های گالری',
                'gallery-title'       => 'عنوان گالری',
                'group-code'          => 'کد گروه',
                'id'                  => 'شناسه',
                'image-ids'           => 'شناسه‌های تصویر',
                'image-title'         => 'عنوان تصویر',
                'sort'                => 'مرتب‌سازی', 
                'status'              => 'وضعیت', 
                'thumbnail-image-id'  => 'شناسه تصویر بندانگشتی',
                'thumbnail'           => 'تصویر بندانگشتی', 
                'update'              => 'به‌روزرسانی',
            ],
        ],
    ], 

    'shop' => [
       'components' => [
            'categories' => [
                'gallery-description' => 'به گالری مجموعه محصولات ما خوش آمدید، یک نمایشگاه متفکرانه طراحی شده برای الهام‌بخشی و اطلاع‌رسانی. هر مجموعه با دقت برای برجسته کردن ویژگی‌ها و مزایای منحصربه‌فرد محصولات ما گردآوری شده است.',
                'gallery-heading'     => 'گالری مجموعه محصولات را کاوش کنید',
                'view-gallery'        => 'نمایش گالری',
            ],
        ],

        'image-gallery' => [
            'gallery'          => 'گالری',
            'images'           => 'تصاویر',
            'no-gallery-found' => 'هیچ گالری موجود نیست.',
            'no-image-found'   => 'هیچ تصویری موجود نیست.',
            'view-gallery'     => 'نمایش گالری',
        ],
    ],
];