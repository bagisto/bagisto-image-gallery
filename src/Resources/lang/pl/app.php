<?php

return [   
    'admin' => [
        'configuration' => [
            'image-gallery' => [
                'info'  => 'Galeria obrazów',
                'title' => 'Galeria obrazów',

                'setting' => [
                    'info'  => 'Ustaw opcje jednostek dla galerii obrazów',
                    'title' => 'Ustawienia',

                    'image-options' => [
                        'gallery-setting' => 'Ustawienia galerii',
                        'info'            => 'Ustaw efekt otwarcia, efekt zamykania, podpis i inne.',

                        'image-gallery-show' => [
                            'disable' => 'Wyłącz',
                            'enable'  => 'Włącz',
                            'title'   => 'Pokaz galerii obrazów',
                        ],

                        'opening-effect' => [
                            'elastic' => 'Elastyczność',
                            'fade'    => 'Rozmycie',
                            'none'    => 'Brak',
                            'title'   => 'Efekt otwarcia',
                        ],

                        'closing-effect' => [
                            'elastic' => 'Elastyczność',
                            'fade'    => 'Rozmycie',
                            'none'    => 'Brak',
                            'title'   => 'Efekt zamykania',
                        ],

                        'caption' => [
                            'no'    => 'Nie',
                            'title' => 'Podpis',
                            'yes'   => 'Tak',
                        ],

                        'caption-type' => [
                            'float'   => 'Pływający',
                            'info'    => "'pływający' i 'nad' działają z pozycją 'dół'.",
                            'inside'  => 'Wewnątrz',
                            'outside' => 'Na zewnątrz',
                            'over'    => 'Nad',
                            'title'   => 'Typ podpisu',
                        ],

                        'caption-position' => [
                            'bottom' => 'Dół',
                            'title'  => 'Pozycja podpisu',
                            'top'    => 'Góra',
                        ],

                        'background' => [
                            'dark'  => 'Ciemne',
                            'light' => 'Jasne',
                            'title' => 'Tło',
                        ],

                        'cyclic' => [
                            'no'    => 'Nie',
                            'title' => 'Cykliczny',
                            'yes'   => 'Tak',
                        ],

                        'interval' => [
                            'info'  => 'Tylko wartości liczbowe i muszą być między 5000 a 99999',
                            'title' => 'Interwał',
                        ],

                        'border' => [
                            'no'    => 'Nie',
                            'title' => 'Ramka',
                            'yes'   => 'Tak',
                        ],

                        'slide-count' => [
                            'no'    => 'Nie',
                            'title' => 'Liczba slajdów',
                            'yes'   => 'Tak',
                        ],

                        'controls' => [
                            'no'    => 'Nie',
                            'title' => 'Kontrolki',
                            'yes'   => 'Tak',
                        ],
                    ],
                ],
            ],
        ],

        'layouts' => [
            'image-gallery'  => 'Galeria obrazów',
            'manage-gallery' => 'Zarządzaj galerią',
            'manage-groups'  => 'Zarządzaj grupami',
            'manage-images'  => 'Zarządzaj obrazami',
        ],

        'image-gallery' => [
            'manage-images' => [
                'index' => [
                    'create' => 'Dodaj Obrazy',
                    'title'  => 'Zarządzaj Obrazami',
                ],

                'create' => [
                    'back-btn'    => 'Powrót',
                    'description' => 'Opis',
                    'disable'     => 'Wyłącz',
                    'enable'      => 'Włącz',
                    'general'     => 'Ogólne',
                    'image'       => 'Obraz',
                    'page-title'  => 'Dodaj Obrazy',
                    'save-btn'    => 'Zapisz Obrazy',
                    'sort'        => 'Sortuj',
                    'status'      => 'Status',
                    'title'       => 'Tytuł',
                ],

                'edit' => [
                    'back-btn'    => 'Powrót',
                    'description' => 'Opis',
                    'disable'     => 'Wyłącz',
                    'enable'      => 'Włącz',
                    'general'     => 'Ogólne',
                    'image'       => 'Obraz',
                    'page-title'  => 'Edytuj Obrazy',
                    'save-btn'    => 'Zapisz Obrazy',
                    'sort'        => 'Sortuj',
                    'status'      => 'Status',
                    'title'       => 'Tytuł',
                ],

                'create-success'      => 'Obrazy zostały pomyślnie dodane.',
                'delete-failed'       => 'Nie można usunąć obrazów.',
                'delete-success'      => 'Obrazy zostały pomyślnie usunięte.',
                'image-error'         => 'Obraz nie znaleziony.',
                'image-required'      => 'Pole obrazu jest wymagane.',
                'mass-delete-success' => 'Wybrane obrazy zostały pomyślnie usunięte.',
                'mass-update-success' => 'Wybrane obrazy zostały pomyślnie zaktualizowane.',
                'update-success'      => 'Obrazy zostały pomyślnie zaktualizowane.',
            ],

            'manage-gallery' => [
                'index' => [
                    'code-note' => 'Uwaga: Kod galerii musi być alfanumeryczny, bez spacji ani znaków specjalnych.',
                    'create'    => 'Utwórz Galerię',
                    'title'     => 'Zarządzaj Galerią',
                ],

                'create' => [
                    'back-btn'           => 'Powrót',
                    'description'        => 'Opis',
                    'disable'            => 'Wyłącz',
                    'enable'             => 'Włącz',
                    'gallery-code'       => 'Kod Galerii',
                    'gallery-image'      => 'Obraz Galerii',
                    'gallery'            => 'Galeria',
                    'id'                 => 'ID',
                    'image-title'        => 'Tytuł Obrazu',
                    'page-title'         => 'Dodaj Galerię',
                    'save-btn'           => 'Zapisz Galerię',
                    'sort'               => 'Sortuj',
                    'status'             => 'Status',
                    'thumbnail-image-id' => 'ID Miniaturki Obrazu',
                    'thumbnail'          => 'Miniaturka',
                    'title'              => 'Tytuł',
                ],

                'edit' => [
                    'back-btn'      => 'Powrót',
                    'disable'       => 'Wyłącz',
                    'enable'        => 'Włącz',
                    'gallery-code'  => 'Kod Galerii',
                    'gallery-image' => 'Obraz Galerii',
                    'gallery'       => 'Galeria',
                    'page-title'    => 'Edytuj Galerię',
                    'save-btn'      => 'Zapisz Galerię',
                    'status'        => 'Status',
                    'title'         => 'Tytuł',
                ],

                'create-success'      => 'Galeria została pomyślnie utworzona.',
                'delete-failed'       => 'Nie można usunąć galerii.',
                'delete-success'      => 'Galeria została pomyślnie usunięta.',
                'mass-delete-success' => 'Wybrane galerie zostały pomyślnie usunięte.',
                'mass-update-success' => 'Wybrane galerie zostały pomyślnie zaktualizowane.',
                'update-success'      => 'Galeria została pomyślnie zaktualizowana.',
            ],

            'manage-groups' => [
                'index' => [
                    'code-note' => 'Uwaga: Kod grupy musi być alfanumeryczny, bez spacji ani znaków specjalnych.',
                    'create'    => 'Utwórz Grupy',
                    'title'     => 'Zarządzaj Grupami',
                ],

                'create' => [
                    'back-btn'           => 'Powrót',
                    'disable'            => 'Wyłącz',
                    'enable'             => 'Włącz',
                    'gallery-code'       => 'Kod Galerii',
                    'gallery-title'      => 'Tytuł Galerii',
                    'group-code'         => 'Kod Grupy',
                    'group'              => 'Grupa',
                    'id'                 => 'ID',
                    'image-ids'          => 'ID Obrazów',
                    'page-title'         => 'Dodaj Grupę',
                    'save-btn'           => 'Zapisz Grupę',
                    'status'             => 'Status',
                    'thumbnail-image-id' => 'ID Miniaturki Obrazu',
                ],

                'edit' => [
                    'back-btn'      => 'Powrót',
                    'disable'       => 'Wyłącz',
                    'enable'        => 'Włącz',
                    'group-code'    => 'Kod Grupy',
                    'group'         => 'Grupa',
                    'page-title'    => 'Edytuj Grupę',
                    'save-btn'      => 'Zapisz Grupę',
                    'status'        => 'Status',
                ],

                'create-success'      => 'Grupy zostały pomyślnie utworzone.',
                'delete-failed'       => 'Nie można usunąć grup.',
                'delete-success'      => 'Grupy zostały pomyślnie usunięte.',
                'mass-delete-success' => 'Wybrane grupy zostały pomyślnie usunięte.',
                'mass-update-success' => 'Wybrane grupy zostały pomyślnie zaktualizowane.',
                'update-success'      => 'Grupy zostały pomyślnie zaktualizowane.',
            ],

            'datagrid' => [
                'delete'              => 'Usuń',
                'description'         => 'Opis',
                'disable'             => 'Wyłącz', 
                'edit'                => 'Edytuj',
                'enable'              => 'Włącz', 
                'gallery-code'        => 'Kod Galerii',
                'gallery-ids'         => 'ID Galerii',
                'gallery-title'       => 'Tytuł Galerii',
                'group-code'          => 'Kod Grupy',
                'id'                  => 'ID',
                'image-ids'           => 'ID Obrazów',
                'image-title'         => 'Tytuł Obrazu',
                'sort'                => 'Sortuj', 
                'status'              => 'Status', 
                'thumbnail-image-id'  => 'ID Miniaturki Obrazu',
                'thumbnail'           => 'Miniaturka', 
                'update'              => 'Aktualizuj',
            ],
        ],
    ], 

    'shop' => [
       'components' => [
            'categories' => [
                'gallery-description' => 'Witamy w naszej Galerii Kolekcji Produktów, starannie dobranej wystawie zaprojektowanej, aby inspirować i informować. Każda kolekcja jest starannie zestawiona, aby podkreślić unikalne cechy i zalety naszych produktów.',
                'gallery-heading'     => 'Odkryj Galerię Kolekcji Produktów',
                'view-gallery'        => 'Zobacz Galerię',
            ],
        ],

        'image-gallery' => [
            'gallery'          => 'Galeria',
            'images'           => 'Zdjęcia',
            'no-gallery-found' => 'Brak dostępnej galerii.',
            'no-image-found'   => 'Brak dostępnych zdjęć.',
            'view-gallery'     => 'Zobacz Galerię',
        ],
    ],
];