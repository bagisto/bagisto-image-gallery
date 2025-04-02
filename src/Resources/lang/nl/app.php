<?php

return [   
    'admin' => [
        'configuration' => [
            'image-gallery' => [
                'info'  => 'Afbeeldingen Galerij',
                'title' => 'Afbeeldingen Galerij',

                'setting' => [
                    'info'  => 'Stel eenheidsopties in voor de afbeeldingengalerij',
                    'title' => 'Instelling',

                    'image-options' => [
                        'gallery-setting' => 'Galerij Instelling',
                        'info'            => 'Stel openings-effect, sluitingseffect, bijschrift en meer in.',

                        'image-gallery-show' => [
                            'disable' => 'Uitschakelen',
                            'enable'  => 'Inschakelen',
                            'title'   => 'Afbeeldingen Galerij Weergeven',
                        ],

                        'opening-effect' => [
                            'elastic' => 'Elastisch',
                            'fade'    => 'Vervagen',
                            'none'    => 'Geen',
                            'title'   => 'Openings Effect',
                        ],

                        'closing-effect' => [
                            'elastic' => 'Elastisch',
                            'fade'    => 'Vervagen',
                            'none'    => 'Geen',
                            'title'   => 'Sluitings Effect',
                        ],

                        'caption' => [
                            'no'    => 'Nee',
                            'title' => 'Bijschrift',
                            'yes'   => 'Ja',
                        ],

                        'caption-type' => [
                            'float'   => 'Float',
                            'info'    => "'float' en 'over' werken met positie 'onder'.",
                            'inside'  => 'Binnen',
                            'outside' => 'Buiten',
                            'over'    => 'Over',
                            'title'   => 'Bijschrift Type',
                        ],

                        'caption-position' => [
                            'bottom' => 'Onder',
                            'title'  => 'Bijschrift Positie',
                            'top'    => 'Boven',
                        ],

                        'background' => [
                            'dark'  => 'Donker',
                            'light' => 'Licht',
                            'title' => 'Achtergrond',
                        ],

                        'cyclic' => [
                            'no'    => 'Nee',
                            'title' => 'Cyclisch',
                            'yes'   => 'Ja',
                        ],

                        'interval' => [
                            'info'  => 'Alleen numerieke waarden en moeten tussen 5000 en 99999 liggen',
                            'title' => 'Interval',
                        ],

                        'border' => [
                            'no'    => 'Nee',
                            'title' => 'Rand',
                            'yes'   => 'Ja',
                        ],

                        'slide-count' => [
                            'no'    => 'Nee',
                            'title' => "Aantal Dia's",
                            'yes'   => 'Ja',
                        ],

                        'controls' => [
                            'no'    => 'Nee',
                            'title' => 'Bedieningselementen',
                            'yes'   => 'Ja',
                        ],
                    ],
                ],
            ],
        ],

        'layouts' => [
            'image-gallery'  => 'Afbeeldingen Galerij',
            'manage-gallery' => 'Galerij Beheren',
            'manage-groups'  => 'Groepen Beheren',
            'manage-images'  => 'Afbeeldingen Beheren',
        ],

        'image-gallery' => [
            'manage-images' => [
                'index' => [
                    'create' => 'Voeg Afbeeldingen Toe',
                    'title'  => 'Beheer Afbeeldingen',
                ],

                'create' => [
                    'back-btn'    => 'Terug',
                    'description' => 'Omschrijving',
                    'disable'     => 'Uitschakelen',
                    'enable'      => 'Inschakelen',
                    'general'     => 'Algemeen',
                    'image'       => 'Afbeelding',
                    'page-title'  => 'Voeg Afbeeldingen Toe',
                    'save-btn'    => 'Sla Afbeeldingen Op',
                    'sort'        => 'Sorteren',
                    'status'      => 'Status',
                    'title'       => 'Titel',
                ],

                'edit' => [
                    'back-btn'    => 'Terug',
                    'description' => 'Omschrijving',
                    'disable'     => 'Uitschakelen',
                    'enable'      => 'Inschakelen',
                    'general'     => 'Algemeen',
                    'image'       => 'Afbeelding',
                    'page-title'  => 'Afbeeldingen Bewerken',
                    'save-btn'    => 'Sla Afbeeldingen Op',
                    'sort'        => 'Sorteren',
                    'status'      => 'Status',
                    'title'       => 'Titel',
                ],

                'create-success'      => 'Afbeeldingen zijn succesvol toegevoegd.',
                'delete-failed'       => 'Afbeeldingen konden niet worden verwijderd.',
                'delete-success'      => 'Afbeeldingen zijn succesvol verwijderd.',
                'image-error'         => 'Afbeelding niet gevonden.',
                'image-required'      => 'Het afbeeldingsveld is vereist.',
                'mass-delete-success' => 'Geselecteerde afbeeldingen zijn succesvol verwijderd.',
                'mass-update-success' => 'Geselecteerde afbeeldingen zijn succesvol bijgewerkt.',
                'update-success'      => 'Afbeeldingen zijn succesvol bijgewerkt.',
            ],

            'manage-gallery' => [
                'index' => [
                    'code-note' => 'Opmerking: De galerijcode moet alfanumeriek zijn, zonder spaties of speciale tekens.',
                    'create'    => 'Maak Galerij Aan',
                    'title'     => 'Beheer Galerij',
                ],

                'create' => [
                    'back-btn'           => 'Terug',
                    'description'        => 'Omschrijving',
                    'disable'            => 'Uitschakelen',
                    'enable'             => 'Inschakelen',
                    'gallery-code'       => 'Galerijcode',
                    'gallery-image'      => 'Galerijafbeelding',
                    'gallery'            => 'Galerij',
                    'id'                 => 'ID',
                    'image-title'        => 'Afbeeldingstitel',
                    'page-title'         => 'Voeg Galerij Toe',
                    'save-btn'           => 'Sla Galerij Op',
                    'sort'               => 'Sorteren',
                    'status'             => 'Status',
                    'thumbnail-image-id' => 'Thumbnail Afbeelding ID',
                    'thumbnail'          => 'Thumbnail',
                    'title'              => 'Titel',
                ],

                'edit' => [
                    'back-btn'      => 'Terug',
                    'disable'       => 'Uitschakelen',
                    'enable'        => 'Inschakelen',
                    'gallery-code'  => 'Galerijcode',
                    'gallery-image' => 'Galerijafbeelding',
                    'gallery'       => 'Galerij',
                    'page-title'    => 'Galerij Bewerken',
                    'save-btn'      => 'Sla Galerij Op',
                    'status'        => 'Status',
                    'title'         => 'Titel',
                ],

                'create-success'      => 'Galerij is succesvol aangemaakt.',
                'delete-failed'       => 'Galerij kon niet worden verwijderd.',
                'delete-success'      => 'Galerij is succesvol verwijderd.',
                'mass-delete-success' => 'Geselecteerde galerijen zijn succesvol verwijderd.',
                'mass-update-success' => 'Geselecteerde galerijen zijn succesvol bijgewerkt.',
                'update-success'      => 'Galerij is succesvol bijgewerkt.',
            ],

            'manage-groups' => [
                'index' => [
                    'code-note' => 'Opmerking: De groepscode moet alfanumeriek zijn, zonder spaties of speciale tekens.',
                    'create'    => 'Maak Groepen Aan',
                    'title'     => 'Beheer Groepen',
                ],

                'create' => [
                    'back-btn'           => 'Terug',
                    'disable'            => 'Uitschakelen',
                    'enable'             => 'Inschakelen',
                    'gallery-code'       => 'Galerijcode',
                    'gallery-title'      => 'Galerijtitel',
                    'group-code'         => 'Groepcode',
                    'group'              => 'Groep',
                    'id'                 => 'ID',
                    'image-ids'          => 'Afbeelding IDs',
                    'page-title'         => 'Voeg Groep Toe',
                    'save-btn'           => 'Sla Groep Op',
                    'status'             => 'Status',
                    'thumbnail-image-id' => 'Thumbnail Afbeelding ID',
                ],

                'edit' => [
                    'back-btn'      => 'Terug',
                    'disable'       => 'Uitschakelen',
                    'enable'        => 'Inschakelen',
                    'group-code'    => 'Groepcode',
                    'group'         => 'Groep',
                    'page-title'    => 'Groep Bewerken',
                    'save-btn'      => 'Sla Groep Op',
                    'status'        => 'Status',
                ],

                'create-success'      => 'Groepen zijn succesvol aangemaakt.',
                'delete-failed'       => 'Groepen konden niet worden verwijderd.',
                'delete-success'      => 'Groepen zijn succesvol verwijderd.',
                'mass-delete-success' => 'Geselecteerde groepen zijn succesvol verwijderd.',
                'mass-update-success' => 'Geselecteerde groepen zijn succesvol bijgewerkt.',
                'update-success'      => 'Groepen zijn succesvol bijgewerkt.',
            ],

            'datagrid' => [
                'delete'              => 'Verwijderen',
                'description'         => 'Omschrijving',
                'disable'             => 'Uitschakelen', 
                'edit'                => 'Bewerken',
                'enable'              => 'Inschakelen', 
                'gallery-code'        => 'Galerijcode',
                'gallery-ids'         => 'Galerij IDs',
                'gallery-title'       => 'Galerijtitel',
                'group-code'          => 'Groepcode',
                'id'                  => 'ID',
                'image-ids'           => 'Afbeelding IDs',
                'image-title'         => 'Afbeeldingstitel',
                'sort'                => 'Sorteren', 
                'status'              => 'Status', 
                'thumbnail-image-id'  => 'Thumbnail Afbeelding ID',
                'thumbnail'           => 'Thumbnail', 
                'update'              => 'Bijwerken',
            ],
        ],
    ], 

    'shop' => [
       'components' => [
            'categories' => [
                'gallery-description' => 'Welkom in onze Productcollectiegalerij, een zorgvuldig samengestelde etalage die is ontworpen om te inspireren en informeren. Elke collectie is zorgvuldig samengesteld om de unieke kenmerken en voordelen van onze producten te benadrukken.',
                'gallery-heading'     => 'Ontdek de Productcollectiegalerij',
                'view-gallery'        => 'Galerij bekijken',
            ],
        ],

        'image-gallery' => [
            'gallery'          => 'Galerij',
            'images'           => 'Afbeeldingen',
            'no-gallery-found' => 'Geen galerij beschikbaar.',
            'no-image-found'   => 'Geen afbeelding beschikbaar.',
            'view-gallery'     => 'Galerij bekijken',
        ],
    ],
];