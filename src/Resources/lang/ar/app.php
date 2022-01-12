<?php

return [    
    'images' => [
        'page-title' => 'إدارة الصور',
        'action'     => 'إضافة صورة',   
        'create' =>  [
            'page_title' => 'إضافة صورة',
            'action'  => 'احفظ الصورة',
            'accordian_title' => 'الصور',
            'title' => 'عنوان الصورة',
            'description'   =>    'وصف',
            'sort'   =>    'فرز',
            'image'   =>    'صورة',
            'btn_label'   =>    'إضافة صورة',
            'title_msg'   =>    "تأكد من عدم استخدام المسافات والأحرف الكبيرة",
            'status'   =>    'حالة',
            'enable'   =>    'يمكن',
            'disable'   =>    'تعطيل',
        ],
        'edit' =>   [
            'page_title'  => 'تعديل الصورة',
            'action'  =>  'تحديث الصورة',
            'accordian_title' => 'الصور',
            'title' => 'عنوان الصورة',
            'description'   =>    'وصف',
            'sort'   =>    'فرز',
            'image'   =>    'صورة',
            'btn_label'   =>    'إضافة صورة',
            'title_msg'   =>    "تأكد من عدم استخدام المسافات والأحرف الكبيرة",
            'status'   =>    'حالة',
            'enable'   =>    'يمكن',
            'disable'   =>    'تعطيل',
        ]
    ], 'manage_gallery' => [
        'page-title' => 'إدارة المعرض',
        'action'     => 'أضف معرض',   
        'create' =>  [
            'page_title' => 'أضف معرض',
            'action'  => 'حفظ المعرض',
            'accordian_title' => 'صالة عرض',
            'title' => 'عنوان المعرض',
            'gallery_image'   =>    'صورة المعرض',
            'gallery_code'   =>    'كود المعرض',
            'status'   =>    'حالة',
            'enable'   =>    'يمكن',
            'disable'   =>    'تعطيل',
        ],
        'edit' =>   [
            'page_title'  => 'تحرير المعرض',
            'action'  =>  'معرض التحديث',
            'accordian_title' => 'صالة عرض',
            'title' => 'عنوان المعرض',
            'gallery_image'   =>    'صورة المعرض',
            'gallery_code'   =>    'كود المعرض',
            'status'   =>    'حالة',
            'enable'   =>    'يمكن',
            'disable'   =>    'تعطيل',
        ]
    ], 'manage_group' => [
        'page_title' => 'إدارة المجموعة',
        'action'     => 'أضف مجموعة',   
        'create' =>  [
            'page_title' => 'أضف مجموعة',
            'action'  => 'حفظ المجموعة',
            'accordian_title' => 'مجموعة',
            'galleries'   =>    'صالات العرض',
            'group_code'   =>    'كود المجموعة',
            'status'   =>    'حالة',
            'enable'   =>    'يمكن',
            'disable'   =>    'تعطيل',
        ],
        'edit' =>   [
            'page_title'  => 'تحرير المجموعة',
            'action'  =>  'تحديث المجموعة',
            'accordian_title' => 'مجموعة',
            'galleries'   =>    'صالات العرض',
            'group_code'   =>    'كود المجموعة',
            'status'   =>    'حالة',
            'enable'   =>    'يمكن',
            'disable'   =>    'تعطيل',
        ]
    ], 'datagrid'  =>  [
            'image_gallery'  => [
                'id'  => 'بطاقة تعريف',
                'thumbnail'  => 'ظفري',
                'image_title'  => 'عنوان الصورة',
                'description'  =>  'وصف',
                'sort'  => 'فرز',
                'status'  => 'حالة',
                'enable' => 'يمكن',
                'disable' => 'تعطيل',
                'delete'  => 'حذف',
                'update'  => 'تحديث',
            ],
            'manage_gallery'  => [
                'id'  => 'بطاقة تعريف',
                'gallery_code'  => 'كود المعرض',
                'gallery_title'  => 'عنوان المعرض',
                'description'  =>  'وصف',
                'image_ids'  => 'معرفات الصور',
                'thumbnail_image_id'  => 'معرف الصورة المصغرة',
                'status'  =>  'حالة',
                'enable' => 'يمكن',
                'disable' => 'تعطيل',
            ],
            'manage_group'  => [
                'id'  => 'بطاقة تعريف',
                'group_code'  => 'كود المجموعة',
                'gallery_ids'  => 'معرّفات المعرض',
                'status'  =>  'حالة',
                'enable' => 'يمكن',
                'disable' => 'تعطيل',
            ]
    ],
    'view' => [
        'view_galleries'  =>  'مشاهدة المعارض',
        'home'  =>  'الصفحة الرئيسية',
        'image_gallery'  => 'معرض الصور',
        'gallery'  => 'صالة عرض',
    ]

];

