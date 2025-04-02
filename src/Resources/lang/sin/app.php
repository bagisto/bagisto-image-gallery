<?php

return [   
    'admin' => [
        'configuration' => [
            'image-gallery' => [
                'info'  => 'ඡායාරූප ගැලරිය',
                'title' => 'ඡායාරූප ගැලරිය',

                'setting' => [
                    'info'  => 'ඡායාරූප ගැලරිය සඳහා ඒකක විකල්ප සැකසුම',
                    'title' => 'සැකසුම',

                    'image-options' => [
                        'gallery-setting' => 'ගැලරිය සැකසුම',
                        'info'            => 'විවෘත අනෙකුත්, වසාවේ බාහාව, කැප්ෂේව සහ තවත් ලෙස සැකසුම',

                        'image-gallery-show' => [
                            'disable' => 'අක්රිය කරන්න',
                            'enable'  => 'සක්රිය කරන්න',
                            'title'   => 'ඡායාරූප ගැලරිය පෙන්වන්න',
                        ],

                        'opening-effect' => [
                            'elastic' => 'ඉලාවික්',
                            'fade'    => 'පේවේම්',
                            'none'    => 'කිසිවක්ක් නේ',
                            'title'   => 'අරිවේක බාහාව',
                        ],

                        'closing-effect' => [
                            'elastic' => 'ඉලාවික්',
                            'fade'    => 'පේවේම්',
                            'none'    => 'කිසිවක්ක් නේ',
                            'title'   => 'වසාවේ බාහාව',
                        ],

                        'caption' => [
                            'no'    => 'නේ',
                            'title' => 'සිරස්වේද්ධ',
                            'yes'   => 'ඔව්',
                        ],

                        'caption-type' => [
                            'float'   => 'පිස්වෙහි',
                            'info'    => "'float' සහ 'over' යන්න පිස්වෙහි ස්ථාන 'bottom' සඳහා වැඩි විස්තරයක්.",
                            'inside'  => 'අතුරුපිස්වෙහි',
                            'outside' => 'බාහාව',
                            'over'    => 'වතුරේ',
                            'title'   => 'අරුණාකයා වර්ගය',
                        ],

                        'caption-position' => [
                            'bottom' => 'පහළ',
                            'title'  => 'අරුණාකයා ස්ථානය',
                            'top'    => 'ඉහළ',
                        ],

                        'background' => [
                            'dark'  => 'අඳුරු',
                            'light' => 'සැහැල්ලු',
                            'title' => 'පස්වන',
                        ],

                        'cyclic' => [
                            'no'    => 'නේ',
                            'title' => 'සර්වියානු',
                            'yes'   => 'ඔව්',
                        ],

                        'interval' => [
                            'info'  => 'මූලිකවම සංඛ්‍යාත්මක අගයන් විය යුතු අතර 5000 සහ 99999 අතර විය යුතුය',
                            'title' => 'ප්‍රකාශය',
                        ],

                        'border' => [
                            'no'    => 'නේ',
                            'title' => 'සිරස්වේද්ධ',
                            'yes'   => 'ඔව්',
                        ],

                        'slide-count' => [
                            'no'    => 'නේ',
                            'title' => 'ස්ලයිඩ් ගණන',
                            'yes'   => 'ඔව්',
                        ],

                        'controls' => [
                            'no'    => 'නේ',
                            'title' => 'විධාන',
                            'yes'   => 'ඔව්',
                        ],
                    ],
                ],
            ],
        ],

        'layouts' => [
            'image-gallery'  => 'ඡායාරූප ගැලරිය',
            'manage-gallery' => 'ගැලරිය කළමනාකාර',
            'manage-groups'  => 'සමූහ කළමනාකාර',
            'manage-images'  => 'ඡායාරූප කළමනාකාර',
        ],

        'image-gallery' => [
            'manage-images' => [
                'index' => [
                    'create' => 'ඡායාරූප එකතු කරන්න',
                    'title'  => 'ඡායාරූප කළමනාකරණය',
                ],

                'create' => [
                    'back-btn'    => 'පසුගිය',
                    'description' => 'විස්තර',
                    'disable'     => 'නිශ්ක්‍රිය කරන්න',
                    'enable'      => 'සක්‍රිය කරන්න',
                    'general'     => 'සාමාන්‍ය',
                    'image'       => 'ඡායාරූපය',
                    'page-title'  => 'ඡායාරූප එකතු කරන්න',
                    'save-btn'    => 'ඡායාරූප සුරකින්න',
                    'sort'        => 'අනුපිළිවෙළ',
                    'status'      => 'තත්ත්වය',
                    'title'       => 'ශීර්ෂය',
                ],

                'edit' => [
                    'back-btn'    => 'පසුගිය',
                    'description' => 'විස්තර',
                    'disable'     => 'නිශ්ක්‍රිය කරන්න',
                    'enable'      => 'සක්‍රිය කරන්න',
                    'general'     => 'සාමාන්‍ය',
                    'image'       => 'ඡායාරූපය',
                    'page-title'  => 'ඡායාරූප සංස්කරණය කරන්න',
                    'save-btn'    => 'ඡායාරූප සුරකින්න',
                    'sort'        => 'අනුපිළිවෙළ',
                    'status'      => 'තත්ත්වය',
                    'title'       => 'ශීර්ෂය',
                ],

                'create-success'      => 'ඡායාරූප සාර්ථකව එකතු කරන ලදී.',
                'delete-failed'       => 'ඡායාරූප මැකිය නොහැක.',
                'delete-success'      => 'ඡායාරූප සාර්ථකව මැකීය.',
                'image-error'         => 'ඡායාරූපක් හමු වන්නේ නැත.',
                'image-required'      => 'ඡායාරූප ක්ෂේත්‍රය අත්‍යවශ්‍ය වේ.',
                'mass-delete-success' => 'තෝරාගත් ඡායාරූප සාර්ථකව මැකීය.',
                'mass-update-success' => 'තෝරාගත් ඡායාරූප සාර්ථකව යාවත්කාලීන කරන ලදී.',
                'update-success'      => 'ඡායාරූප සාර්ථකව යාවත්කාලීන කරන ලදී.',
            ],

            'manage-gallery' => [
                'index' => [
                    'code-note' => 'සටහන: ගැලරි කේතය අකුරු-අංක බවක් සහිත විය යුතුය, ඉඩ කඩ නැත හෝ විශේෂ අක්ෂර නොමැතිව.',
                    'create'    => 'ගැලරියක් සාදන්න',
                    'title'     => 'ගැලරිය කළමනාකරණය',
                ],

                'create' => [
                    'back-btn'           => 'පසුගිය',
                    'description'        => 'විස්තර',
                    'disable'            => 'නිශ්ක්‍රිය කරන්න',
                    'enable'             => 'සක්‍රිය කරන්න',
                    'gallery-code'       => 'ගැලරී කේතය',
                    'gallery-image'      => 'ගැලරී චායාරූපය',
                    'gallery'            => 'ගැලරිය',
                    'id'                 => 'ID',
                    'image-title'        => 'ඡායාරූපයේ ශීර්ෂය',
                    'page-title'         => 'ගැලරිය එකතු කරන්න',
                    'save-btn'           => 'ගැලරිය සුරකින්න',
                    'sort'               => 'අනුපිළිවෙළ',
                    'status'             => 'තත්ත්වය',
                    'thumbnail-image-id' => 'තිරසාර ඡායාරූප ID',
                    'thumbnail'          => 'තිරසාර',
                    'title'              => 'ශීර්ෂය',
                ],

                'edit' => [
                    'back-btn'      => 'පසුගිය',
                    'disable'       => 'නිශ්ක්‍රිය කරන්න',
                    'enable'        => 'සක්‍රිය කරන්න',
                    'gallery-code'  => 'ගැලරී කේතය',
                    'gallery-image' => 'ගැලරී චායාරූපය',
                    'gallery'       => 'ගැලරිය',
                    'page-title'    => 'ගැලරිය සංස්කරණය කරන්න',
                    'save-btn'      => 'ගැලරිය සුරකින්න',
                    'status'        => 'තත්ත්වය',
                    'title'         => 'ශීර්ෂය',
                ],

                'create-success'      => 'ගැලරිය සාර්ථකව සාදන ලදී.',
                'delete-failed'       => 'ගැලරිය මැකිය නොහැක.',
                'delete-success'      => 'ගැලරිය සාර්ථකව මැකීය.',
                'mass-delete-success' => 'තෝරාගත් ගැලරියන් සාර්ථකව මැකීය.',
                'mass-update-success' => 'තෝරාගත් ගැලරියන් සාර්ථකව යාවත්කාලීන කරන ලදී.',
                'update-success'      => 'ගැලරිය සාර්ථකව යාවත්කාලීන කරන ලදී.',
            ],

            'manage-groups' => [
                'index' => [
                    'code-note' => 'සටහන: කණ්ඩායම් කේතය අකුරු-අංක බවක් සහිත විය යුතුය, ඉඩ කඩ නැත හෝ විශේෂ අක්ෂර නොමැතිව.',
                    'create'    => 'සමුහ සාදන්න',
                    'title'     => 'සමුහ කළමනාකරණය',
                ],

                'create' => [
                    'back-btn'           => 'පසුගිය',
                    'disable'            => 'නිශ්ක්‍රිය කරන්න',
                    'enable'             => 'සක්‍රිය කරන්න',
                    'gallery-code'       => 'ගැලරී කේතය',
                    'gallery-title'      => 'ගැලරිය ශීර්ෂය',
                    'group-code'         => 'සමුහ කේතය',
                    'group'              => 'සමුහය',
                    'id'                 => 'ID',
                    'image-ids'          => 'ඡායාරූප ID',
                    'page-title'         => 'සමුහ එකතු කරන්න',
                    'save-btn'           => 'සමුහය සුරකින්න',
                    'status'             => 'තත්ත්වය',
                    'thumbnail-image-id' => 'තිරසාර ඡායාරූප ID',
                ],

                'edit' => [
                    'back-btn'      => 'පසුගිය',
                    'disable'       => 'නිශ්ක්‍රිය කරන්න',
                    'enable'        => 'සක්‍රිය කරන්න',
                    'group-code'    => 'සමුහ කේතය',
                    'group'         => 'සමුහය',
                    'page-title'    => 'සමුහ සංස්කරණය කරන්න',
                    'save-btn'      => 'සමුහය සුරකින්න',
                    'status'        => 'තත්ත්වය',
                ],

                'create-success'      => 'සමුහ සාර්ථකව සාදන ලදී.',
                'delete-failed'       => 'සමුහ මැකිය නොහැක.',
                'delete-success'      => 'සමුහ සාර්ථකව මැකීය.',
                'mass-delete-success' => 'තෝරාගත් සමුහ සාර්ථකව මැකීය.',
                'mass-update-success' => 'තෝරාගත් සමුහ සාර්ථකව යාවත්කාලීන කරන ලදී.',
                'update-success'      => 'සමුහ සාර්ථකව යාවත්කාලීන කරන ලදී.',
            ],

            'datagrid' => [
                'delete'              => 'මැකීම',
                'description'         => 'විස්තර',
                'disable'             => 'නිශ්ක්‍රිය කරන්න', 
                'edit'                => 'සංස්කරණය',
                'enable'              => 'සක්‍රිය කරන්න', 
                'gallery-code'        => 'ගැලරී කේතය',
                'gallery-ids'         => 'ගැලරී ID',
                'gallery-title'       => 'ගැලරිය ශීර්ෂය',
                'group-code'          => 'සමුහ කේතය',
                'id'                  => 'ID',
                'image-ids'           => 'ඡායාරූප ID',
                'image-title'         => 'ඡායාරූප ශීර්ෂය',
                'sort'                => 'අනුපිළිවෙළ', 
                'status'              => 'තත්ත්වය', 
                'thumbnail-image-id'  => 'තිරසාර ඡායාරූප ID',
                'thumbnail'           => 'තිරසාර', 
                'update'              => 'යාවත්කාලීන කරන්න',
            ],
        ],
    ], 

    'shop' => [
       'components' => [
            'categories' => [
                'gallery-description' => 'අපේ නිෂ්පාදන එකතුවේ ගැලරියට සාදරයෙන් පිළිගනිමු, ප්‍රේරණය සහ තොරතුරු ලබා දීමට නිර්මාණය කළ ගැලරියක්. එක් එක් එකතුව අපේ නිෂ්පාදනවල අනන්‍ය ලක්ෂණ සහ ප්‍රතිලාභ සංඥා දැක්වීමට නිවැරදිව එකතු කර ඇත.',
                'gallery-heading'     => 'නිෂ්පාදන එකතුවේ ගැලරිය අනාවරණය කරන්න',
                'view-gallery'        => 'ගැලරිය බලන්න',
            ],
        ],

        'image-gallery' => [
            'gallery'          => 'ගැලරිය',
            'images'           => 'රූප',
            'no-gallery-found' => 'ගැලරිය නොමැත.',
            'no-image-found'   => 'රූපය නොමැත.',
            'view-gallery'     => 'ගැලරිය බලන්න',
        ],
    ],
];