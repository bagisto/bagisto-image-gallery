<?php

return [   
    'admin' => [
        'configuration' => [
            'image-gallery' => [
                'info'  => 'גלריית תמונות',
                'title' => 'גלריית תמונות',

                'setting' => [
                    'info'  => 'הגדר אפשרויות יחידה עבור גלריית תמונות',
                    'title' => 'הגדרות',

                    'image-options' => [
                        'gallery-setting' => 'הגדרות גלריה',
                        'info'            => 'הגדר אפקט פתיחה, אפקט סגירה, כיתוב ועוד.',

                        'image-gallery-show' => [
                            'disable' => 'כיבוי',
                            'enable'  => 'הפעלה',
                            'title'   => 'הצגת גלריית תמונות',
                        ],

                        'opening-effect' => [
                            'elastic' => 'מתיחה',
                            'fade'    => 'עמעום',
                            'none'    => 'אין',
                            'title'   => 'אפקט פתיחה',
                        ],

                        'closing-effect' => [
                            'elastic' => 'מתיחה',
                            'fade'    => 'עמעום',
                            'none'    => 'אין',
                            'title'   => 'אפקט סגירה',
                        ],

                        'caption' => [
                            'no'    => 'לא',
                            'title' => 'כיתוב',
                            'yes'   => 'כן',
                        ],

                        'caption-type' => [
                            'float'   => 'צף',
                            'info'    => "'float' ו-'over' עובדים עם פוזיציה 'תחתית'.",
                            'inside'  => 'בתוך',
                            'outside' => 'מחוץ',
                            'over'    => 'מעל',
                            'title'   => 'סוג כיתוב',
                        ],

                        'caption-position' => [
                            'bottom' => 'למטה',
                            'title'  => 'מיקום כיתוב',
                            'top'    => 'למעלה',
                        ],

                        'background' => [
                            'dark'  => 'כהה',
                            'light' => 'בהיר',
                            'title' => 'רקע',
                        ],

                        'cyclic' => [
                            'no'    => 'לא',
                            'title' => 'מחזורי',
                            'yes'   => 'כן',
                        ],

                        'interval' => [
                            'info'  => 'ערכים מספריים בלבד וחייבים להיות בין 5000 ל-99999',
                            'title' => 'מרווח',
                        ],

                        'border' => [
                            'no'    => 'לא',
                            'title' => 'מסגרת',
                            'yes'   => 'כן',
                        ],

                        'slide-count' => [
                            'no'    => 'לא',
                            'title' => 'מספר שקופיות',
                            'yes'   => 'כן',
                        ],

                        'controls' => [
                            'no'    => 'לא',
                            'title' => 'בקרים',
                            'yes'   => 'כן',
                        ],
                    ],
                ],
            ],
        ],

        'layouts' => [
            'image-gallery'  => 'גלריית תמונות',
            'manage-gallery' => 'ניהול גלריה',
            'manage-groups'  => 'ניהול קבוצות',
            'manage-images'  => 'ניהול תמונות',
        ],

        'image-gallery' => [
            'manage-images' => [
                'index' => [
                    'create' => 'הוסף תמונות',
                    'title'  => 'נהל תמונות',
                ],

                'create' => [
                    'back-btn'    => 'חזור',
                    'description' => 'תיאור',
                    'disable'     => 'השבת',
                    'enable'      => 'הפעל',
                    'general'     => 'כללי',
                    'image'       => 'תמונה',
                    'page-title'  => 'הוסף תמונות',
                    'save-btn'    => 'שמור תמונות',
                    'sort'        => 'מיון',
                    'status'      => 'סטטוס',
                    'title'       => 'כותרת',
                ],

                'edit' => [
                    'back-btn'    => 'חזור',
                    'description' => 'תיאור',
                    'disable'     => 'השבת',
                    'enable'      => 'הפעל',
                    'general'     => 'כללי',
                    'image'       => 'תמונה',
                    'page-title'  => 'ערוך תמונות',
                    'save-btn'    => 'שמור תמונות',
                    'sort'        => 'מיון',
                    'status'      => 'סטטוס',
                    'title'       => 'כותרת',
                ],

                'create-success'      => 'התמונות נוספו בהצלחה.',
                'delete-failed'       => 'לא ניתן למחוק את התמונות.',
                'delete-success'      => 'התמונות נמחקו בהצלחה.',
                'image-error'         => 'התמונה לא נמצאה.',
                'image-required'      => 'שדה התמונה חובה.',
                'mass-delete-success' => 'התמונות שנבחרו נמחקו בהצלחה.',
                'mass-update-success' => 'התמונות שנבחרו עודכנו בהצלחה.',
                'update-success'      => 'התמונות עודכנו בהצלחה.',
            ],

            'manage-gallery' => [
                'index' => [
                    'code-note' => 'הערה: קוד הגלריה חייב להיות אלפאנומרי ללא רווחים או תווים מיוחדים.',
                    'create'    => 'צור גלריה',
                    'title'     => 'נהל גלריה',
                ],

                'create' => [
                    'back-btn'           => 'חזור',
                    'description'        => 'תיאור',
                    'disable'            => 'השבת',
                    'enable'             => 'הפעל',
                    'gallery-code'       => 'קוד גלריה',
                    'gallery-image'      => 'תמונת גלריה',
                    'gallery'            => 'גלריה',
                    'id'                 => 'מזהה',
                    'image-title'        => 'כותרת תמונה',
                    'page-title'         => 'הוסף גלריה',
                    'save-btn'           => 'שמור גלריה',
                    'sort'               => 'מיון',
                    'status'             => 'סטטוס',
                    'thumbnail-image-id' => 'מזהה תמונת ממוזערת',
                    'thumbnail'          => 'תמונת ממוזערת',
                    'title'              => 'כותרת',
                ],

                'edit' => [
                    'back-btn'      => 'חזור',
                    'disable'       => 'השבת',
                    'enable'        => 'הפעל',
                    'gallery-code'  => 'קוד גלריה',
                    'gallery-image' => 'תמונת גלריה',
                    'gallery'       => 'גלריה',
                    'page-title'    => 'ערוך גלריה',
                    'save-btn'      => 'שמור גלריה',
                    'status'        => 'סטטוס',
                    'title'         => 'כותרת',
                ],

                'create-success'      => 'הגלריה נוצרה בהצלחה.',
                'delete-failed'       => 'לא ניתן למחוק את הגלריה.',
                'delete-success'      => 'הגלריה נמחקה בהצלחה.',
                'mass-delete-success' => 'הגלריות שנבחרו נמחקו בהצלחה.',
                'mass-update-success' => 'הגלריות שנבחרו עודכנו בהצלחה.',
                'update-success'      => 'הגלריה עודכנה בהצלחה.',
            ],

            'manage-groups' => [
                'index' => [
                    'code-note' => 'הערה: קוד הקבוצה חייב להיות אלפאנומרי ללא רווחים או תווים מיוחדים.',
                    'create'    => 'צור קבוצות',
                    'title'     => 'נהל קבוצות',
                ],

                'create' => [
                    'back-btn'           => 'חזור',
                    'disable'            => 'השבת',
                    'enable'             => 'הפעל',
                    'gallery-code'       => 'קוד גלריה',
                    'gallery-title'      => 'כותרת גלריה',
                    'group-code'         => 'קוד קבוצה',
                    'group'              => 'קבוצה',
                    'id'                 => 'מזהה',
                    'image-ids'          => 'מזהי תמונה',
                    'page-title'         => 'הוסף קבוצה',
                    'save-btn'           => 'שמור קבוצה',
                    'status'             => 'סטטוס',
                    'thumbnail-image-id' => 'מזהה תמונת ממוזערת',
                ],

                'edit' => [
                    'back-btn'      => 'חזור',
                    'disable'       => 'השבת',
                    'enable'        => 'הפעל',
                    'group-code'    => 'קוד קבוצה',
                    'group'         => 'קבוצה',
                    'page-title'    => 'ערוך קבוצה',
                    'save-btn'      => 'שמור גלריה',
                    'status'        => 'סטטוס',
                ],

                'create-success'      => 'הקבוצות נוצרו בהצלחה.',
                'delete-failed'       => 'לא ניתן למחוק את הקבוצה.',
                'delete-success'      => 'הקבוצה נמחקה בהצלחה.',
                'mass-delete-success' => 'הקבוצות שנבחרו נמחקו בהצלחה.',
                'mass-update-success' => 'הקבוצות שנבחרו עודכנו בהצלחה.',
                'update-success'      => 'הקבוצה עודכנה בהצלחה.',
            ],

            'datagrid' => [
                'delete'              => 'מחק',
                'description'         => 'תיאור',
                'disable'             => 'השבת', 
                'edit'                => 'ערוך',
                'enable'              => 'הפעל', 
                'gallery-code'        => 'קוד גלריה',
                'gallery-ids'         => 'מזהי גלריה',
                'gallery-title'       => 'כותרת גלריה',
                'group-code'          => 'קוד קבוצה',
                'id'                  => 'מזהה',
                'image-ids'           => 'מזהי תמונה',
                'image-title'         => 'כותרת תמונה',
                'sort'                => 'מיון', 
                'status'              => 'סטטוס', 
                'thumbnail-image-id'  => 'מזהה תמונת ממוזערת',
                'thumbnail'           => 'תמונת ממוזערת', 
                'update'              => 'עדכן',
            ],
        ],
    ], 

    'shop' => [
       'components' => [
            'categories' => [
                'gallery-description' => 'ברוכים הבאים לגלריית אוסף המוצרים שלנו, תצוגה אצורה שנועדה להעניק השראה ומידע. כל אוסף מורכב בקפידה כדי להדגיש את התכונות והיתרונות הייחודיים של המוצרים שלנו.',
                'gallery-heading'     => 'חקור את גלריית אוסף המוצרים',
                'view-gallery'        => 'צפה בגלריה',
            ],
        ],

        'image-gallery' => [
            'gallery'          => 'גלריה',
            'images'           => 'תמונות',
            'no-gallery-found' => 'אין גלריה זמינה.',
            'no-image-found'   => 'אין תמונה זמינה.',
            'view-gallery'     => 'צפה בגלריה',
        ],
    ],
];