<?php

return [   
    'admin' => [
        'configuration' => [
            'image-gallery' => [
                'info'  => 'Galeria de Imagens',
                'title' => 'Galeria de Imagens',

                'setting' => [
                    'info'  => 'Defina opções de unidade para a galeria de imagens',
                    'title' => 'Configuração',

                    'image-options' => [
                        'gallery-setting' => 'Configuração da Galeria',
                        'info'            => 'Defina efeitos de abertura, efeito de fechamento, legenda e mais.',

                        'image-gallery-show' => [
                            'disable' => 'Desativar',
                            'enable'  => 'Ativar',
                            'title'   => 'Mostrar Galeria de Imagens',
                        ],

                        'opening-effect' => [
                            'elastic' => 'Elástico',
                            'fade'    => 'Desvanecer',
                            'none'    => 'Nenhum',
                            'title'   => 'Efeito de Abertura',
                        ],

                        'closing-effect' => [
                            'elastic' => 'Elástico',
                            'fade'    => 'Desvanecer',
                            'none'    => 'Nenhum',
                            'title'   => 'Efeito de Fechamento',
                        ],

                        'caption' => [
                            'no'    => 'Não',
                            'title' => 'Legenda',
                            'yes'   => 'Sim',
                        ],

                        'caption-type' => [
                            'float'   => 'Flutuar',
                            'info'    => "'float' e 'over' funcionam com a posição 'inferior'.",
                            'inside'  => 'Dentro',
                            'outside' => 'Fora',
                            'over'    => 'Sobre',
                            'title'   => 'Tipo de Legenda',
                        ],

                        'caption-position' => [
                            'bottom' => 'Inferior',
                            'title'  => 'Posição da Legenda',
                            'top'    => 'Topo',
                        ],

                        'background' => [
                            'dark'  => 'Escuro',
                            'light' => 'Claro',
                            'title' => 'Fundo',
                        ],

                        'cyclic' => [
                            'no'    => 'Não',
                            'title' => 'Cíclico',
                            'yes'   => 'Sim',
                        ],

                        'interval' => [
                            'info'  => 'Somente valores numéricos e devem estar entre 5000 e 99999',
                            'title' => 'Intervalo',
                        ],

                        'border' => [
                            'no'    => 'Não',
                            'title' => 'Borda',
                            'yes'   => 'Sim',
                        ],

                        'slide-count' => [
                            'no'    => 'Não',
                            'title' => 'Contagem de Slides',
                            'yes'   => 'Sim',
                        ],

                        'controls' => [
                            'no'    => 'Não',
                            'title' => 'Controles',
                            'yes'   => 'Sim',
                        ],
                    ],
                ],
            ],
        ],

        'layouts' => [
            'image-gallery'  => 'Galeria de Imagens',
            'manage-gallery' => 'Gerenciar Galeria',
            'manage-groups'  => 'Gerenciar Grupos',
            'manage-images'  => 'Gerenciar Imagens',
        ],

        'image-gallery' => [
            'manage-images' => [
                'index' => [
                    'create' => 'Добавить изображения',
                    'title'  => 'Управление изображениями',
                ],

                'create' => [
                    'back-btn'    => 'Назад',
                    'description' => 'Описание',
                    'disable'     => 'Отключить',
                    'enable'      => 'Включить',
                    'general'     => 'Общее',
                    'image'       => 'Изображение',
                    'page-title'  => 'Добавить изображения',
                    'save-btn'    => 'Сохранить изображения',
                    'sort'        => 'Сортировка',
                    'status'      => 'Статус',
                    'title'       => 'Название',
                ],

                'edit' => [
                    'back-btn'    => 'Назад',
                    'description' => 'Описание',
                    'disable'     => 'Отключить',
                    'enable'      => 'Включить',
                    'general'     => 'Общее',
                    'image'       => 'Изображение',
                    'page-title'  => 'Редактировать изображения',
                    'save-btn'    => 'Сохранить изображения',
                    'sort'        => 'Сортировка',
                    'status'      => 'Статус',
                    'title'       => 'Название',
                ],

                'create-success'      => 'Изображения успешно добавлены.',
                'delete-failed'       => 'Не удалось удалить изображения.',
                'delete-success'      => 'Изображения успешно удалены.',
                'image-error'         => 'Изображение не найдено.',
                'image-required'      => 'Поле изображения обязательно.',
                'mass-delete-success' => 'Выбранные изображения успешно удалены.',
                'mass-update-success' => 'Выбранные изображения успешно обновлены.',
                'update-success'      => 'Изображения успешно обновлены.',
            ],

            'manage-gallery' => [
                'index' => [
                    'code-note' => 'Nota: O código da galeria deve ser alfanumérico, sem espaços ou caracteres especiais.',
                    'create'    => 'Создать галерею',
                    'title'     => 'Управление галереей',
                ],

                'create' => [
                    'back-btn'           => 'Назад',
                    'description'        => 'Описание',
                    'disable'            => 'Отключить',
                    'enable'             => 'Включить',
                    'gallery-code'       => 'Код галереи',
                    'gallery-image'      => 'Изображение галереи',
                    'gallery'            => 'Галерея',
                    'id'                 => 'ID',
                    'image-title'        => 'Название изображения',
                    'page-title'         => 'Добавить галерею',
                    'save-btn'           => 'Сохранить галерею',
                    'sort'               => 'Сортировка',
                    'status'             => 'Статус',
                    'thumbnail-image-id' => 'ID миниатюры',
                    'thumbnail'          => 'Миниатюра',
                    'title'              => 'Название',
                ],

                'edit' => [
                    'back-btn'      => 'Назад',
                    'disable'       => 'Отключить',
                    'enable'        => 'Включить',
                    'gallery-code'  => 'Код галереи',
                    'gallery-image' => 'Изображение галереи',
                    'gallery'       => 'Галерея',
                    'page-title'    => 'Редактировать галерею',
                    'save-btn'      => 'Сохранить галерею',
                    'status'        => 'Статус',
                    'title'         => 'Название',
                ],

                'create-success'      => 'Галерея успешно создана.',
                'delete-failed'       => 'Не удалось удалить галерею.',
                'delete-success'      => 'Галерея успешно удалена.',
                'mass-delete-success' => 'Выбранные галереи успешно удалены.',
                'mass-update-success' => 'Выбранные галереи успешно обновлены.',
                'update-success'      => 'Галерея успешно обновлена.',
            ],

            'manage-groups' => [
                'index' => [
                    'code-note' => 'Nota: O código do grupo deve ser alfanumérico, sem espaços ou caracteres especiais.',
                    'create'    => 'Создать группы',
                    'title'     => 'Управление группами',
                ],

                'create' => [
                    'back-btn'           => 'Назад',
                    'disable'            => 'Отключить',
                    'enable'             => 'Включить',
                    'gallery-code'       => 'Код галереи',
                    'gallery-title'      => 'Название галереи',
                    'group-code'         => 'Код группы',
                    'group'              => 'Группа',
                    'id'                 => 'ID',
                    'image-ids'          => 'ID изображений',
                    'page-title'         => 'Добавить группу',
                    'save-btn'           => 'Сохранить группу',
                    'status'             => 'Статус',
                    'thumbnail-image-id' => 'ID миниатюры изображения',
                ],

                'edit' => [
                    'back-btn'      => 'Назад',
                    'disable'       => 'Отключить',
                    'enable'        => 'Включить',
                    'group-code'    => 'Код группы',
                    'group'         => 'Группа',
                    'page-title'    => 'Редактировать группу',
                    'save-btn'      => 'Сохранить группу',
                    'status'        => 'Статус',
                ],

                'create-success'      => 'Группы успешно созданы.',
                'delete-failed'       => 'Не удалось удалить группы.',
                'delete-success'      => 'Группы успешно удалены.',
                'mass-delete-success' => 'Выбранные группы успешно удалены.',
                'mass-update-success' => 'Выбранные группы успешно обновлены.',
                'update-success'      => 'Группы успешно обновлены.',
            ],

            'datagrid' => [
                'delete'              => 'Удалить',
                'description'         => 'Описание',
                'disable'             => 'Отключить', 
                'edit'                => 'Редактировать',
                'enable'              => 'Включить', 
                'gallery-code'        => 'Код галереи',
                'gallery-ids'         => 'ID галерей',
                'gallery-title'       => 'Название галереи',
                'group-code'          => 'Код группы',
                'id'                  => 'ID',
                'image-ids'           => 'ID изображений',
                'image-title'         => 'Название изображения',
                'sort'                => 'Сортировка', 
                'status'              => 'Статус', 
                'thumbnail-image-id'  => 'ID миниатюры',
                'thumbnail'           => 'Миниатюра', 
                'update'              => 'Обновить',
            ],
        ],
    ], 

    'shop' => [
       'components' => [
            'categories' => [
                'gallery-description' => 'Bem-vindo à nossa Galeria de Coleção de Produtos, uma vitrine cuidadosamente organizada para inspirar e informar. Cada coleção é montada com cuidado para destacar as características e benefícios únicos dos nossos produtos.',
                'gallery-heading'     => 'Explore a Galeria de Coleção de Produtos',
                'view-gallery'        => 'Ver Galeria',
            ],
        ],

        'image-gallery' => [
            'gallery'          => 'Galeria',
            'images'           => 'Imagens',
            'no-gallery-found' => 'Galeria não disponível.',
            'no-image-found'   => 'Imagem não disponível.',
            'view-gallery'     => 'Ver Galeria',
        ],
    ],
];