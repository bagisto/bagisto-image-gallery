<?php

return [   
    'admin' => [
        'configuration' => [
            'image-gallery' => [
                'info'  => 'Galleria Immagini',
                'title' => 'Galleria Immagini',

                'setting' => [
                    'info'  => 'Imposta le opzioni unitarie per la galleria di immagini',
                    'title' => 'Impostazione',

                    'image-options' => [
                        'gallery-setting' => 'Impostazione Galleria',
                        'info'            => 'Imposta effetto di apertura, effetto di chiusura, didascalia e altro.',

                        'image-gallery-show' => [
                            'disable' => 'Disabilita',
                            'enable'  => 'Abilita',
                            'title'   => 'Mostra Galleria Immagini',
                        ],

                        'opening-effect' => [
                            'elastic' => 'Elastico',
                            'fade'    => 'Fade',
                            'none'    => 'Nessuno',
                            'title'   => 'Effetto Apertura',
                        ],

                        'closing-effect' => [
                            'elastic' => 'Elastico',
                            'fade'    => 'Fade',
                            'none'    => 'Nessuno',
                            'title'   => 'Effetto Chiusura',
                        ],

                        'caption' => [
                            'no'    => 'No',
                            'title' => 'Didascalia',
                            'yes'   => 'Sì',
                        ],

                        'caption-type' => [
                            'float'   => 'Float',
                            'info'    => "'float' e 'over' funzionano con la posizione 'bottom'.",
                            'inside'  => 'Dentro',
                            'outside' => 'Fuori',
                            'over'    => 'Sopra',
                            'title'   => 'Tipo Didascalia',
                        ],

                        'caption-position' => [
                            'bottom' => 'In Basso',
                            'title'  => 'Posizione Didascalia',
                            'top'    => 'In Alto',
                        ],

                        'background' => [
                            'dark'  => 'Scuro',
                            'light' => 'Chiaro',
                            'title' => 'Sfondo',
                        ],

                        'cyclic' => [
                            'no'    => 'No',
                            'title' => 'Ciclico',
                            'yes'   => 'Sì',
                        ],

                        'interval' => [
                            'info'  => 'Solo valori numerici e devono essere compresi tra 5000 e 99999',
                            'title' => 'Intervallo',
                        ],

                        'border' => [
                            'no'    => 'No',
                            'title' => 'Bordo',
                            'yes'   => 'Sì',
                        ],

                        'slide-count' => [
                            'no'    => 'No',
                            'title' => 'Conteggio Slide',
                            'yes'   => 'Sì',
                        ],

                        'controls' => [
                            'no'    => 'No',
                            'title' => 'Controlli',
                            'yes'   => 'Sì',
                        ],
                    ],
                ],
            ],
        ],

        'layouts' => [
            'image-gallery'  => 'Galleria Immagini',
            'manage-gallery' => 'Gestisci Galleria',
            'manage-groups'  => 'Gestisci Gruppi',
            'manage-images'  => 'Gestisci Immagini',
        ],

        'image-gallery' => [
            'manage-images' => [
                'index' => [
                    'create' => 'Aggiungi Immagini',
                    'title'  => 'Gestisci Immagini',
                ],

                'create' => [
                    'back-btn'    => 'Indietro',
                    'description' => 'Descrizione',
                    'disable'     => 'Disabilita',
                    'enable'      => 'Abilita',
                    'general'     => 'Generale',
                    'image'       => 'Immagine',
                    'page-title'  => 'Aggiungi Immagini',
                    'save-btn'    => 'Salva Immagini',
                    'sort'        => 'Ordina',
                    'status'      => 'Stato',
                    'title'       => 'Titolo',
                ],

                'edit' => [
                    'back-btn'    => 'Indietro',
                    'description' => 'Descrizione',
                    'disable'     => 'Disabilita',
                    'enable'      => 'Abilita',
                    'general'     => 'Generale',
                    'image'       => 'Immagine',
                    'page-title'  => 'Modifica Immagini',
                    'save-btn'    => 'Salva Immagini',
                    'sort'        => 'Ordina',
                    'status'      => 'Stato',
                    'title'       => 'Titolo',
                ],

                'create-success'      => 'Immagini create con successo.',
                'delete-failed'       => 'Impossibile eliminare le immagini.',
                'delete-success'      => 'Immagini eliminate con successo.',
                'image-error'         => 'Immagine non trovata.',
                'image-required'      => 'Il campo immagine è obbligatorio.',
                'mass-delete-success' => 'Immagini selezionate eliminate con successo.',
                'mass-update-success' => 'Immagini selezionate aggiornate con successo.',
                'update-success'      => 'Immagini aggiornate con successo.',
            ],

            'manage-gallery' => [
                'index' => [
                    'code-note' => 'Nota: Il codice della galleria deve essere alfanumerico senza spazi o caratteri speciali.',
                    'create'    => 'Crea Galleria',
                    'title'     => 'Gestisci Galleria',
                ],

                'create' => [
                    'back-btn'           => 'Indietro',
                    'description'        => 'Descrizione',
                    'disable'            => 'Disabilita',
                    'enable'             => 'Abilita',
                    'gallery-code'       => 'Codice Galleria',
                    'gallery-image'      => 'Immagine Galleria',
                    'gallery'            => 'Galleria',
                    'id'                 => 'ID',
                    'image-title'        => 'Titolo Immagine',
                    'page-title'         => 'Aggiungi Galleria',
                    'save-btn'           => 'Salva Galleria',
                    'sort'               => 'Ordina',
                    'status'             => 'Stato',
                    'thumbnail-image-id' => 'ID Immagine Miniatura',
                    'thumbnail'          => 'Miniatura',
                    'title'              => 'Titolo',
                ],

                'edit' => [
                    'back-btn'      => 'Indietro',
                    'disable'       => 'Disabilita',
                    'enable'        => 'Abilita',
                    'gallery-code'  => 'Codice Galleria',
                    'gallery-image' => 'Immagine Galleria',
                    'gallery'       => 'Galleria',
                    'page-title'    => 'Modifica Galleria',
                    'save-btn'      => 'Salva Galleria',
                    'status'        => 'Stato',
                    'title'         => 'Titolo',
                ],

                'create-success'      => 'Galleria creata con successo.',
                'delete-failed'       => 'Impossibile eliminare la galleria.',
                'delete-success'      => 'Galleria eliminata con successo.',
                'mass-delete-success' => 'Gallerie selezionate eliminate con successo.',
                'mass-update-success' => 'Gallerie selezionate aggiornate con successo.',
                'update-success'      => 'Galleria aggiornata con successo.',
            ],

            'manage-groups' => [
                'index' => [
                    'code-note' => 'Nota: Il codice del gruppo deve essere alfanumerico senza spazi o caratteri speciali.',
                    'create'    => 'Crea Gruppi',
                    'title'     => 'Gestisci Gruppi',
                ],

                'create' => [
                    'back-btn'           => 'Indietro',
                    'disable'            => 'Disabilita',
                    'enable'             => 'Abilita',
                    'gallery-code'       => 'Codice Galleria',
                    'gallery-title'      => 'Titolo Galleria',
                    'group-code'         => 'Codice Gruppo',
                    'group'              => 'Gruppo',
                    'id'                 => 'ID',
                    'image-ids'          => 'ID Immagini',
                    'page-title'         => 'Aggiungi Gruppo',
                    'save-btn'           => 'Salva Gruppo',
                    'status'             => 'Stato',
                    'thumbnail-image-id' => 'ID Immagine Miniatura',
                ],

                'edit' => [
                    'back-btn'      => 'Indietro',
                    'disable'       => 'Disabilita',
                    'enable'        => 'Abilita',
                    'group-code'    => 'Codice Gruppo',
                    'group'         => 'Gruppo',
                    'page-title'    => 'Modifica Gruppo',
                    'save-btn'      => 'Salva Galleria',
                    'status'        => 'Stato',
                ],

                'create-success'      => 'Gruppi creati con successo.',
                'delete-failed'       => 'Impossibile eliminare il gruppo.',
                'delete-success'      => 'Gruppo eliminato con successo.',
                'mass-delete-success' => 'Gruppi selezionati eliminati con successo.',
                'mass-update-success' => 'Gruppi selezionati aggiornati con successo.',
                'update-success'      => 'Gruppi aggiornati con successo.',
            ],

            'datagrid' => [
                'delete'              => 'Elimina',
                'description'         => 'Descrizione',
                'disable'             => 'Disabilita', 
                'edit'                => 'Modifica',
                'enable'              => 'Abilita', 
                'gallery-code'        => 'Codice Galleria',
                'gallery-ids'         => 'ID Galleria',
                'gallery-title'       => 'Titolo Galleria',
                'group-code'          => 'Codice Gruppo',
                'id'                  => 'ID',
                'image-ids'           => 'ID Immagini',
                'image-title'         => 'Titolo Immagine',
                'sort'                => 'Ordina', 
                'status'              => 'Stato', 
                'thumbnail-image-id'  => 'ID Immagine Miniatura',
                'thumbnail'           => 'Miniatura', 
                'update'              => 'Aggiorna',
            ],
        ],
    ], 

    'shop' => [
       'components' => [
            'categories' => [
                'gallery-description' => 'Benvenuti nella nostra Galleria delle Collezioni di Prodotti, una vetrina curata progettata per ispirare e informare. Ogni collezione è accuratamente assemblata per evidenziare le caratteristiche e i benefici unici dei nostri prodotti.',
                'gallery-heading'     => 'Esplora la Galleria delle Collezioni di Prodotti',
                'view-gallery'        => 'Visualizza Galleria',
            ],
        ],

        'image-gallery' => [
            'gallery'          => 'Galleria',
            'images'           => 'Immagini',
            'no-gallery-found' => 'Galleria non disponibile.',
            'no-image-found'   => 'Immagine non disponibile.',
            'view-gallery'     => 'Visualizza Galleria',
        ],
    ],
];