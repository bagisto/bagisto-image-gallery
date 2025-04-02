<?php

return [   
    'admin' => [
        'configuration' => [
            'image-gallery' => [
                'info'  => 'छवि गैलरी',
                'title' => 'छवि गैलरी',

                'setting' => [
                    'info'  => 'छवि गैलरी के लिए इकाई विकल्प सेट करें',
                    'title' => 'सेटिंग',

                    'image-options' => [
                        'gallery-setting' => 'गैलरी सेटिंग',
                        'info'            => 'ओपनिंग-इफेक्ट, क्लोजिंग इफेक्ट, कैप्शन और अधिक सेट करें।',
                        
                        'image-gallery-show' => [
                            'disable' => 'अक्षम करें',
                            'enable'  => 'सक्षम करें',
                            'title'   => 'छवि गैलरी दिखाएं',
                        ],

                        'opening-effect' => [
                            'elastic' => 'इलास्टिक',
                            'fade'    => 'धीरे-धीरे',
                            'none'    => 'कोई नहीं',
                            'title'   => 'ओपनिंग इफेक्ट',
                        ],

                        'closing-effect' => [
                            'elastic' => 'इलास्टिक',
                            'fade'    => 'धीरे-धीरे',
                            'none'    => 'कोई नहीं',
                            'title'   => 'क्लोजिंग इफेक्ट',
                        ],

                        'caption' => [
                            'no'    => 'नहीं',
                            'title' => 'कैप्शन',
                            'yes'   => 'हाँ',
                        ],

                        'caption-type' => [
                            'float'   => 'फ्लोट',
                            'info'    => "'फ्लोट' और 'ओवर' केवल 'नीचे' स्थिति के साथ काम करते हैं।",
                            'inside'  => 'अंदर',
                            'outside' => 'बाहर',
                            'over'    => 'ऊपर',
                            'title'   => 'कैप्शन प्रकार',
                        ],

                        'caption-position' => [
                            'bottom' => 'नीचे',
                            'title'  => 'कैप्शन स्थिति',
                            'top'    => 'ऊपर',
                        ],

                        'background' => [
                            'dark'  => 'अंधेरा',
                            'light' => 'रोशनी',
                            'title' => 'पृष्ठभूमि',
                        ],

                        'cyclic' => [
                            'no'    => 'नहीं',
                            'title' => 'साइक्लिक',
                            'yes'   => 'हाँ',
                        ],

                        'interval' => [
                            'info'  => 'केवल संख्यात्मक मान और 5000 और 99999 के बीच होना चाहिए',
                            'title' => 'अंतराल',
                        ],

                        'border' => [
                            'no'    => 'नहीं',
                            'title' => 'सीमा',
                            'yes'   => 'हाँ',
                        ],

                        'slide-count' => [
                            'no'    => 'नहीं',
                            'title' => 'स्लाइड गणना',
                            'yes'   => 'हाँ',
                        ],

                        'controls' => [
                            'no'    => 'नहीं',
                            'title' => 'नियंत्रण',
                            'yes'   => 'हाँ',
                        ],
                    ],
                ],
            ],
        ],

        'layouts' => [
            'image-gallery'  => 'छवि गैलरी',
            'manage-gallery' => 'गैलरी का प्रबंधन',
            'manage-groups'  => 'समूहों का प्रबंधन',
            'manage-images'  => 'छवियों का प्रबंधन',
        ],

        'image-gallery' => [
            'manage-images' => [
                'index' => [
                    'create' => 'छवियाँ जोड़ें',
                    'title'  => 'छवियों को प्रबंधित करें',
                ],

                'create' => [
                    'back-btn'    => 'वापस',
                    'description' => 'विवरण',
                    'disable'     => 'अक्षम करें',
                    'enable'      => 'सक्षम करें',
                    'general'     => 'सामान्य',
                    'image'       => 'छवि',
                    'page-title'  => 'छवियाँ जोड़ें',
                    'save-btn'    => 'छवियाँ सहेजें',
                    'sort'        => 'क्रमबद्ध करें',
                    'status'      => 'स्थिति',
                    'title'       => 'शीर्षक',
                ],

                'edit' => [
                    'back-btn'    => 'वापस',
                    'description' => 'विवरण',
                    'disable'     => 'अक्षम करें',
                    'enable'      => 'सक्षम करें',
                    'general'     => 'सामान्य',
                    'image'       => 'छवि',
                    'page-title'  => 'छवियाँ संपादित करें',
                    'save-btn'    => 'छवियाँ सहेजें',
                    'sort'        => 'क्रमबद्ध करें',
                    'status'      => 'स्थिति',
                    'title'       => 'शीर्षक',
                ],

                'create-success'      => 'छवियाँ सफलतापूर्वक बनाई गईं।',
                'delete-failed'       => 'छवियाँ हटाई नहीं जा सकीं।',
                'delete-success'      => 'छवियाँ सफलतापूर्वक हटा दी गईं।',
                'image-error'         => 'छवि नहीं मिली।',
                'image-required'      => 'छवि फ़ील्ड आवश्यक है।',
                'mass-delete-success' => 'चयनित छवियाँ सफलतापूर्वक हटा दी गईं।',
                'mass-update-success' => 'चयनित छवियाँ सफलतापूर्वक अपडेट की गईं।',
                'update-success'      => 'छवियाँ सफलतापूर्वक अपडेट की गईं।',
            ],

            'manage-gallery' => [
                'index' => [
                    'code-note' => 'नोट: गैलरी कोड अल्फ़ान्यूमेरिक होना चाहिए, बिना स्पेस या विशेष वर्णों के।',
                    'create'    => 'गैलरी बनाएं',
                    'title'     => 'गैलरी प्रबंधित करें',
                ],

                'create' => [
                    'back-btn'           => 'वापस',
                    'description'        => 'विवरण',
                    'disable'            => 'अक्षम करें',
                    'enable'             => 'सक्षम करें',
                    'gallery-code'       => 'गैलरी कोड',
                    'gallery-image'      => 'गैलरी छवि',
                    'gallery'            => 'गैलरी',
                    'id'                 => 'आईडी',
                    'image-title'        => 'छवि का शीर्षक',
                    'page-title'         => 'गैलरी जोड़ें',
                    'save-btn'           => 'गैलरी सहेजें',
                    'sort'               => 'क्रमबद्ध करें',
                    'status'             => 'स्थिति',
                    'thumbnail-image-id' => 'थंबनेल छवि आईडी',
                    'thumbnail'          => 'थंबनेल',
                    'title'              => 'शीर्षक',
                ],

                'edit' => [
                    'back-btn'      => 'वापस',
                    'disable'       => 'अक्षम करें',
                    'enable'        => 'सक्षम करें',
                    'gallery-code'  => 'गैलरी कोड',
                    'gallery-image' => 'गैलरी छवि',
                    'gallery'       => 'गैलरी',
                    'page-title'    => 'गैलरी संपादित करें',
                    'save-btn'      => 'गैलरी सहेजें',
                    'status'        => 'स्थिति',
                    'title'         => 'शीर्षक',
                ],

                'create-success'      => 'गैलरी सफलतापूर्वक बनाई गई।',
                'delete-failed'       => 'गैलरी हटाई नहीं जा सकी।',
                'delete-success'      => 'गैलरी सफलतापूर्वक हटा दी गई।',
                'mass-delete-success' => 'चयनित गैलरी सफलतापूर्वक हटा दी गई।',
                'mass-update-success' => 'चयनित गैलरी सफलतापूर्वक अपडेट की गई।',
                'update-success'      => 'गैलरी सफलतापूर्वक अपडेट की गई।',
            ],

            'manage-groups' => [
                'index' => [
                    'code-note' => 'नोट: समूह कोड अल्फ़ान्यूमेरिक होना चाहिए, बिना स्पेस या विशेष वर्णों के।',
                    'create'    => 'समूह बनाएं',
                    'title'     => 'समूह प्रबंधित करें',
                ],

                'create' => [
                    'back-btn'           => 'वापस',
                    'disable'            => 'अक्षम करें',
                    'enable'             => 'सक्षम करें',
                    'gallery-code'       => 'गैलरी कोड',
                    'gallery-title'      => 'गैलरी शीर्षक',
                    'group-code'         => 'समूह कोड',
                    'group'              => 'समूह',
                    'id'                 => 'आईडी',
                    'image-ids'          => 'छवि आईडी',
                    'page-title'         => 'समूह जोड़ें',
                    'save-btn'           => 'समूह सहेजें',
                    'status'             => 'स्थिति',
                    'thumbnail-image-id' => 'थंबनेल छवि आईडी',
                ],

                'edit' => [
                    'back-btn'      => 'वापस',
                    'disable'       => 'अक्षम करें',
                    'enable'        => 'सक्षम करें',
                    'group-code'    => 'समूह कोड',
                    'group'         => 'समूह',
                    'page-title'    => 'समूह संपादित करें',
                    'save-btn'      => 'गैलरी सहेजें',
                    'status'        => 'स्थिति',
                ],

                'create-success'      => 'समूह सफलतापूर्वक बनाए गए।',
                'delete-failed'       => 'समूह हटाया नहीं जा सका।',
                'delete-success'      => 'समूह सफलतापूर्वक हटा दिया गया।',
                'mass-delete-success' => 'चयनित समूह सफलतापूर्वक हटा दिए गए।',
                'mass-update-success' => 'चयनित समूह सफलतापूर्वक अपडेट किए गए।',
                'update-success'      => 'समूह सफलतापूर्वक अपडेट किए गए।',
            ],

            'datagrid' => [
                'delete'              => 'हटाएँ',
                'description'         => 'विवरण',
                'disable'             => 'अक्षम करें', 
                'edit'                => 'संपादित करें',
                'enable'              => 'सक्षम करें', 
                'gallery-code'        => 'गैलरी कोड',
                'gallery-ids'         => 'गैलरी आईडी',
                'gallery-title'       => 'गैलरी शीर्षक',
                'group-code'          => 'समूह कोड',
                'id'                  => 'आईडी',
                'image-ids'           => 'छवि आईडी',
                'image-title'         => 'छवि शीर्षक',
                'sort'                => 'क्रमबद्ध करें', 
                'status'              => 'स्थिति', 
                'thumbnail-image-id'  => 'थंबनेल छवि आईडी',
                'thumbnail'           => 'थंबनेल', 
                'update'              => 'अपडेट करें',
            ],
        ],
    ], 

    'shop' => [
       'components' => [
            'categories' => [
                'gallery-description' => 'हमारे प्रोडक्ट कलेक्शन गैलरी में आपका स्वागत है, एक क्यूरेटेड प्रदर्शन जो प्रेरित करने और जानकारी प्रदान करने के लिए डिज़ाइन किया गया है। प्रत्येक कलेक्शन को हमारे उत्पादों की अनोखी विशेषताओं और लाभों को उजागर करने के लिए सावधानीपूर्वक तैयार किया गया है।',
                'gallery-heading'     => 'प्रोडक्ट कलेक्शन गैलरी का अन्वेषण करें',
                'view-gallery'        => 'गैलरी देखें',
            ],
        ],

        'image-gallery' => [
            'gallery'          => 'गैलरी',
            'images'           => 'छवियाँ',
            'no-gallery-found' => 'कोई गैलरी उपलब्ध नहीं है।',
            'no-image-found'   => 'कोई छवि उपलब्ध नहीं है।',
            'view-gallery'     => 'गैलरी देखें',
        ],
    ],
];