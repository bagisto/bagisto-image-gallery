<?php

return [   
    'admin' => [
        'configuration' => [
            'image-gallery' => [
                'info'  => 'Galerie d\'images',
                'title' => 'Galerie d\'images',

                'setting' => [
                    'info'  => 'Définir les options unitaires pour la galerie d\'images',
                    'title' => 'Réglage',

                    'image-options' => [
                        'gallery-setting' => 'Réglage de la galerie',
                        'info'            => 'Définir l\'effet d\'ouverture, l\'effet de fermeture, la légende et plus encore.',

                        'image-gallery-show' => [
                            'disable' => 'Désactiver',
                            'enable'  => 'Activer',
                            'title'   => 'Affichage de la galerie d\'images',
                        ],

                        'opening-effect' => [
                            'elastic' => 'Élastique',
                            'fade'    => 'Fondu',
                            'none'    => 'Aucun',
                            'title'   => 'Effet d\'ouverture',
                        ],

                        'closing-effect' => [
                            'elastic' => 'Élastique',
                            'fade'    => 'Fondu',
                            'none'    => 'Aucun',
                            'title'   => 'Effet de fermeture',
                        ],

                        'caption' => [
                            'no'    => 'Non',
                            'title' => 'Légende',
                            'yes'   => 'Oui',
                        ],

                        'caption-type' => [
                            'float'   => 'Flottant',
                            'info'    => "'flottant' et 'sur' fonctionnent avec la position 'bas'.",
                            'inside'  => "À l'intérieur",
                            'outside' => "À l'extérieur",
                            'over'    => 'Sur',
                            'title'   => 'Type de légende',
                        ],

                        'caption-position' => [
                            'bottom' => 'Bas',
                            'title'  => 'Position de la légende',
                            'top'    => 'Haut',
                        ],

                        'background' => [
                            'dark'  => 'Foncé',
                            'light' => 'Clair',
                            'title' => 'Arrière-plan',
                        ],

                        'cyclic' => [
                            'no'    => 'Non',
                            'title' => 'Cyclique',
                            'yes'   => 'Oui',
                        ],

                        'interval' => [
                            'info'  => 'Uniquement des valeurs numériques et doivent être comprises entre 5000 et 99999',
                            'title' => 'Intervalle',
                        ],

                        'border' => [
                            'no'    => 'Non',
                            'title' => 'Bordure',
                            'yes'   => 'Oui',
                        ],

                        'slide-count' => [
                            'no'    => 'Non',
                            'title' => 'Nombre de diapositives',
                            'yes'   => 'Oui',
                        ],

                        'controls' => [
                            'no'    => 'Non',
                            'title' => 'Contrôles',
                            'yes'   => 'Oui',
                        ],
                    ],
                ],
            ],
        ],

        'layouts' => [
            'image-gallery'  => 'Galerie d\'images',
            'manage-gallery' => 'Gérer la galerie',
            'manage-groups'  => 'Gérer les groupes',
            'manage-images'  => 'Gérer les images',
        ],

        'image-gallery' => [
            'manage-images' => [
                'index' => [
                    'create' => 'Ajouter des Images',
                    'title'  => 'Gérer les Images',
                ],

                'create' => [
                    'back-btn'    => 'Retour',
                    'description' => 'Description',
                    'disable'     => 'Désactiver',
                    'enable'      => 'Activer',
                    'general'     => 'Général',
                    'image'       => 'Image',
                    'page-title'  => 'Ajouter des Images',
                    'save-btn'    => 'Sauvegarder les Images',
                    'sort'        => 'Trier',
                    'status'      => 'Statut',
                    'title'       => 'Titre',
                ],

                'edit' => [
                    'back-btn'    => 'Retour',
                    'description' => 'Description',
                    'disable'     => 'Désactiver',
                    'enable'      => 'Activer',
                    'general'     => 'Général',
                    'image'       => 'Image',
                    'page-title'  => 'Modifier les Images',
                    'save-btn'    => 'Sauvegarder les Images',
                    'sort'        => 'Trier',
                    'status'      => 'Statut',
                    'title'       => 'Titre',
                ],

                'create-success'      => 'Images créées avec succès.',
                'delete-failed'       => 'Impossible de supprimer les images.',
                'delete-success'      => 'Images supprimées avec succès.',
                'image-error'         => 'Image non trouvée.',
                'image-required'      => 'Le champ de l’image est requis.',
                'mass-delete-success' => 'Images sélectionnées supprimées avec succès.',
                'mass-update-success' => 'Images sélectionnées mises à jour avec succès.',
                'update-success'      => 'Images mises à jour avec succès.',
            ],

            'manage-gallery' => [
                'index' => [
                    'code-note' => 'Remarque : Le code de la galerie doit être alphanumérique sans espaces ni caractères spéciaux.',
                    'create'    => 'Créer une Galerie',
                    'title'     => 'Gérer la Galerie',
                ],

                'create' => [
                    'back-btn'           => 'Retour',
                    'description'        => 'Description',
                    'disable'            => 'Désactiver',
                    'enable'             => 'Activer',
                    'gallery-code'       => 'Code de la Galerie',
                    'gallery-image'      => 'Image de la Galerie',
                    'gallery'            => 'Galerie',
                    'id'                 => 'ID',
                    'image-title'        => 'Titre de l’Image',
                    'page-title'         => 'Ajouter une Galerie',
                    'save-btn'           => 'Sauvegarder la Galerie',
                    'sort'               => 'Trier',
                    'status'             => 'Statut',
                    'thumbnail-image-id' => 'ID de l’Image Miniature',
                    'thumbnail'          => 'Miniature',
                    'title'              => 'Titre',
                ],

                'edit' => [
                    'back-btn'      => 'Retour',
                    'disable'       => 'Désactiver',
                    'enable'        => 'Activer',
                    'gallery-code'  => 'Code de la Galerie',
                    'gallery-image' => 'Image de la Galerie',
                    'gallery'       => 'Galerie',
                    'page-title'    => 'Modifier la Galerie',
                    'save-btn'      => 'Sauvegarder la Galerie',
                    'status'        => 'Statut',
                    'title'         => 'Titre',
                ],

                'create-success'      => 'Galerie créée avec succès.',
                'delete-failed'       => 'Impossible de supprimer la galerie.',
                'delete-success'      => 'Galerie supprimée avec succès.',
                'mass-delete-success' => 'Galeries sélectionnées supprimées avec succès.',
                'mass-update-success' => 'Galeries sélectionnées mises à jour avec succès.',
                'update-success'      => 'Galerie mise à jour avec succès.',
            ],

            'manage-groups' => [
                'index' => [
                    'code-note' => 'Remarque : Le code du groupe doit être alphanumérique sans espaces ni caractères spéciaux.',
                    'create'    => 'Créer des Groupes',
                    'title'     => 'Gérer les Groupes',
                ],

                'create' => [
                    'back-btn'           => 'Retour',
                    'disable'            => 'Désactiver',
                    'enable'             => 'Activer',
                    'gallery-code'       => 'Code de la Galerie',
                    'gallery-title'      => 'Titre de la Galerie',
                    'group-code'         => 'Code du Groupe',
                    'group'              => 'Groupe',
                    'id'                 => 'ID',
                    'image-ids'          => 'IDs des Images',
                    'page-title'         => 'Ajouter un Groupe',
                    'save-btn'           => 'Sauvegarder le Groupe',
                    'status'             => 'Statut',
                    'thumbnail-image-id' => 'ID de l’Image Miniature',
                ],

                'edit' => [
                    'back-btn'      => 'Retour',
                    'disable'       => 'Désactiver',
                    'enable'        => 'Activer',
                    'group-code'    => 'Code du Groupe',
                    'group'         => 'Groupe',
                    'page-title'    => 'Modifier le Groupe',
                    'save-btn'      => 'Sauvegarder la Galerie',
                    'status'        => 'Statut',
                ],

                'create-success'      => 'Groupes créés avec succès.',
                'delete-failed'       => 'Impossible de supprimer le groupe.',
                'delete-success'      => 'Groupe supprimé avec succès.',
                'mass-delete-success' => 'Groupes sélectionnés supprimés avec succès.',
                'mass-update-success' => 'Groupes sélectionnés mis à jour avec succès.',
                'update-success'      => 'Groupes mis à jour avec succès.',
            ],

            'datagrid' => [
                'delete'              => 'Supprimer',
                'description'         => 'Description',
                'disable'             => 'Désactiver', 
                'edit'                => 'Modifier',
                'enable'              => 'Activer', 
                'gallery-code'        => 'Code de la Galerie',
                'gallery-ids'         => 'ID de la Galerie',
                'gallery-title'       => 'Titre de la Galerie',
                'group-code'          => 'Code du Groupe',
                'id'                  => 'ID',
                'image-ids'           => 'IDs des Images',
                'image-title'         => 'Titre de l’Image',
                'sort'                => 'Trier', 
                'status'              => 'Statut', 
                'thumbnail-image-id'  => 'ID de l’Image Miniature',
                'thumbnail'           => 'Miniature', 
                'update'              => 'Mettre à jour',
            ],
        ],
    ], 

    'shop' => [
       'components' => [
            'categories' => [
                'gallery-description' => 'Bienvenue dans notre Galerie de Collections de Produits, une vitrine soigneusement conçue pour inspirer et informer. Chaque collection est assemblée avec soin pour mettre en valeur les caractéristiques et les avantages uniques de nos produits.',
                'gallery-heading'     => 'Explorez la Galerie de Collections de Produits',
                'view-gallery'        => 'Voir la galerie',
            ],
        ],

        'image-gallery' => [
            'gallery'          => 'Galerie',
            'images'           => 'Images',
            'no-gallery-found' => 'Galerie non disponible.',
            'no-image-found'   => 'Image non disponible.',
            'view-gallery'     => 'Voir la galerie',
        ],
    ],
];