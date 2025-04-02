<?php

return [   
    'admin' => [
        'configuration' => [
            'image-gallery' => [
                'info'  => 'Bildergalerie',
                'title' => 'Bildergalerie',

                'setting' => [
                    'info'  => 'Einheitsoptionen für Bildergalerie festlegen',
                    'title' => 'Einstellung',

                    'image-options' => [
                        'gallery-setting' => 'Galerie-Einstellung',
                        'info'            => 'Öffnungs- und Schließungseffekt, Beschriftung und mehr festlegen.',

                        'image-gallery-show' => [
                            'disable' => 'Deaktivieren',
                            'enable'  => 'Aktivieren',
                            'title'   => 'Bildergalerie anzeigen',
                        ],

                        'opening-effect' => [
                            'elastic' => 'Elastisch',
                            'fade'    => 'Verblassen',
                            'none'    => 'Keiner',
                            'title'   => 'Öffnungseffekt',
                        ],

                        'closing-effect' => [
                            'elastic' => 'Elastisch',
                            'fade'    => 'Verblassen',
                            'none'    => 'Keiner',
                            'title'   => 'Schließungseffekt',
                        ],

                        'caption' => [
                            'no'    => 'Nein',
                            'title' => 'Beschriftung',
                            'yes'   => 'Ja',
                        ],

                        'caption-type' => [
                            'float'   => 'Schwebend',
                            'info'    => "'float' und 'over' funktionieren mit Position 'unten'.",
                            'inside'  => 'Innen',
                            'outside' => 'Außen',
                            'over'    => 'Über',
                            'title'   => 'Beschriftungstyp',
                        ],

                        'caption-position' => [
                            'bottom' => 'Unten',
                            'title'  => 'Beschriftungsposition',
                            'top'    => 'Oben',
                        ],

                        'background' => [
                            'dark'  => 'Dunkel',
                            'light' => 'Hell',
                            'title' => 'Hintergrund',
                        ],

                        'cyclic' => [
                            'no'    => 'Nein',
                            'title' => 'Zyklisch',
                            'yes'   => 'Ja',
                        ],

                        'interval' => [
                            'info'  => 'Nur numerische Werte und müssen zwischen 5000 und 99999 liegen',
                            'title' => 'Intervall',
                        ],

                        'border' => [
                            'no'    => 'Nein',
                            'title' => 'Rahmen',
                            'yes'   => 'Ja',
                        ],

                        'slide-count' => [
                            'no'    => 'Nein',
                            'title' => 'Bildanzahl',
                            'yes'   => 'Ja',
                        ],

                        'controls' => [
                            'no'    => 'Nein',
                            'title' => 'Steuerungen',
                            'yes'   => 'Ja',
                        ],
                    ],
                ],
            ],
        ],

        'layouts' => [
            'image-gallery'  => 'Bildergalerie',
            'manage-gallery' => 'Galerie verwalten',
            'manage-groups'  => 'Gruppen verwalten',
            'manage-images'  => 'Bilder verwalten',
        ],

        'image-gallery' => [
            'manage-images' => [
                'index' => [
                    'create' => 'Bilder hinzufügen',
                    'title'  => 'Bilder verwalten',
                ],

                'create' => [
                    'back-btn'    => 'Zurück',
                    'description' => 'Beschreibung',
                    'disable'     => 'Deaktivieren',
                    'enable'      => 'Aktivieren',
                    'general'     => 'Allgemein',
                    'image'       => 'Bild',
                    'page-title'  => 'Bilder hinzufügen',
                    'save-btn'    => 'Bilder speichern',
                    'sort'        => 'Sortieren',
                    'status'      => 'Status',
                    'title'       => 'Titel',
                ],

                'edit' => [
                    'back-btn'    => 'Zurück',
                    'description' => 'Beschreibung',
                    'disable'     => 'Deaktivieren',
                    'enable'      => 'Aktivieren',
                    'general'     => 'Allgemein',
                    'image'       => 'Bild',
                    'page-title'  => 'Bilder bearbeiten',
                    'save-btn'    => 'Bilder speichern',
                    'sort'        => 'Sortieren',
                    'status'      => 'Status',
                    'title'       => 'Titel',
                ],

                'create-success'      => 'Bilder erfolgreich erstellt.',
                'delete-failed'       => 'Bilder konnten nicht gelöscht werden.',
                'delete-success'      => 'Bilder erfolgreich gelöscht.',
                'image-error'         => 'Bild nicht gefunden.',
                'image-required'      => 'Das Feld Bild ist erforderlich.',
                'mass-delete-success' => 'Ausgewählte Bilder erfolgreich gelöscht.',
                'mass-update-success' => 'Ausgewählte Bilder erfolgreich aktualisiert.',
                'update-success'      => 'Bilder erfolgreich aktualisiert.',
            ],

            'manage-gallery' => [
                'index' => [
                    'code-note' => 'Hinweis: Der Galeriecode muss alphanumerisch sein, ohne Leerzeichen oder Sonderzeichen.',   
                    'create'    => 'Galerie erstellen',
                    'title'     => 'Galerie verwalten',
                ],

                'create' => [
                    'back-btn'           => 'Zurück',
                    'description'        => 'Beschreibung',
                    'disable'            => 'Deaktivieren',
                    'enable'             => 'Aktivieren',
                    'gallery-code'       => 'Galerie-Code',
                    'gallery-image'      => 'Galeriebild',
                    'gallery'            => 'Galerie',
                    'id'                 => 'ID',
                    'image-title'        => 'Bildtitel',
                    'page-title'         => 'Galerie hinzufügen',
                    'save-btn'           => 'Galerie speichern',
                    'sort'               => 'Sortieren',
                    'status'             => 'Status',
                    'thumbnail-image-id' => 'Thumbnail-Bild-ID',
                    'thumbnail'          => 'Thumbnail',
                    'title'              => 'Titel',
                ],

                'edit' => [
                    'back-btn'      => 'Zurück',
                    'disable'       => 'Deaktivieren',
                    'enable'        => 'Aktivieren',
                    'gallery-code'  => 'Galerie-Code',
                    'gallery-image' => 'Galeriebild',
                    'gallery'       => 'Galerie',
                    'page-title'    => 'Galerie bearbeiten',
                    'save-btn'      => 'Galerie speichern',
                    'status'        => 'Status',
                    'title'         => 'Titel',
                ],

                'create-success'      => 'Galerie erfolgreich erstellt.',
                'delete-failed'       => 'Galerie konnte nicht gelöscht werden.',
                'delete-success'      => 'Galerie erfolgreich gelöscht.',
                'mass-delete-success' => 'Ausgewählte Galerien erfolgreich gelöscht.',
                'mass-update-success' => 'Ausgewählte Galerien erfolgreich aktualisiert.',
                'update-success'      => 'Galerie erfolgreich aktualisiert.',
            ],

            'manage-groups' => [
                'index' => [
                    'code-note' => 'Hinweis: Der Gruppencode muss alphanumerisch sein, ohne Leerzeichen oder Sonderzeichen.',
                    'create'    => 'Gruppen erstellen',
                    'title'     => 'Gruppen verwalten',
                ],

                'create' => [
                    'back-btn'           => 'Zurück',
                    'disable'            => 'Deaktivieren',
                    'enable'             => 'Aktivieren',
                    'gallery-code'       => 'Galerie-Code',
                    'gallery-title'      => 'Galerietitel',
                    'group-code'         => 'Gruppen-Code',
                    'group'              => 'Gruppe',
                    'id'                 => 'ID',
                    'image-ids'          => 'Bild-IDs',
                    'page-title'         => 'Gruppe hinzufügen',
                    'save-btn'           => 'Gruppe speichern',
                    'status'             => 'Status',
                    'thumbnail-image-id' => 'Thumbnail-Bild-ID',
                ],

                'edit' => [
                    'back-btn'      => 'Zurück',
                    'disable'       => 'Deaktivieren',
                    'enable'        => 'Aktivieren',
                    'group-code'    => 'Gruppen-Code',
                    'group'         => 'Gruppe',
                    'page-title'    => 'Gruppe bearbeiten',
                    'save-btn'      => 'Galerie speichern',
                    'status'        => 'Status',
                ],

                'create-success'      => 'Gruppen erfolgreich erstellt.',
                'delete-failed'       => 'Gruppe konnte nicht gelöscht werden.',
                'delete-success'      => 'Gruppe erfolgreich gelöscht.',
                'mass-delete-success' => 'Ausgewählte Gruppen erfolgreich gelöscht.',
                'mass-update-success' => 'Ausgewählte Gruppen erfolgreich aktualisiert.',
                'update-success'      => 'Gruppen erfolgreich aktualisiert.',
            ],

            'datagrid' => [
                'delete'              => 'Löschen',
                'description'         => 'Beschreibung',
                'disable'             => 'Deaktivieren', 
                'edit'                => 'Bearbeiten',
                'enable'              => 'Aktivieren', 
                'gallery-code'        => 'Galerie-Code',
                'gallery-ids'         => 'Galerie-ID',
                'gallery-title'       => 'Galerietitel',
                'group-code'          => 'Gruppen-Code',
                'id'                  => 'ID',
                'image-ids'           => 'Bild-IDs',
                'image-title'         => 'Bildtitel',
                'sort'                => 'Sortieren', 
                'status'              => 'Status', 
                'thumbnail-image-id'  => 'Thumbnail-Bild-ID',
                'thumbnail'           => 'Thumbnail', 
                'update'              => 'Aktualisieren',
            ],
        ],
    ], 

    'shop' => [
       'components' => [
            'categories' => [
                'gallery-description' => 'Willkommen in unserer Produktkollektionsgalerie, einer kuratierten Ausstellung, die inspirieren und informieren soll. Jede Kollektion ist sorgfältig zusammengestellt, um die einzigartigen Eigenschaften und Vorteile unserer Produkte hervorzuheben.',
                'gallery-heading'     => 'Entdecken Sie die Produktkollektionsgalerie',
                'view-gallery'        => 'Galerie anzeigen',
            ],
        ],

        'image-gallery' => [
            'gallery'          => 'Galerie',
            'images'           => 'Bilder',
            'no-gallery-found' => 'Keine Galerie verfügbar.',
            'no-image-found'   => 'Kein Bild verfügbar.',
            'view-gallery'     => 'Galerie anzeigen',
        ],
    ],
];