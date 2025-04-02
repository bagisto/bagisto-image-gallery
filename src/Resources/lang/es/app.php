<?php

return [   
    'admin' => [
        'configuration' => [
            'image-gallery' => [
                'info'  => 'Galería de imágenes',
                'title' => 'Galería de imágenes',

                'setting' => [
                    'info'  => 'Establecer opciones de unidad para la galería de imágenes',
                    'title' => 'Ajuste',

                    'image-options' => [
                        'gallery-setting' => 'Configuración de galería',
                        'info'            => 'Establecer efecto de apertura, efecto de cierre, leyenda y más.',

                        'image-gallery-show' => [
                            'disable' => 'Deshabilitar',
                            'enable'  => 'Habilitar',
                            'title'   => 'Mostrar galería de imágenes',
                        ],

                        'opening-effect' => [
                            'elastic' => 'Elástico',
                            'fade'    => 'Desvanecer',
                            'none'    => 'Ninguno',
                            'title'   => 'Efecto de apertura',
                        ],

                        'closing-effect' => [
                            'elastic' => 'Elástico',
                            'fade'    => 'Desvanecer',
                            'none'    => 'Ninguno',
                            'title'   => 'Efecto de cierre',
                        ],

                        'caption' => [
                            'no'    => 'No',
                            'title' => 'Leyenda',
                            'yes'   => 'Sí',
                        ],

                        'caption-type' => [
                            'float'   => 'Flotante',
                            'info'    => "'float' y 'over' funcionan con la posición 'bottom'.",
                            'inside'  => 'Dentro',
                            'outside' => 'Fuera',
                            'over'    => 'Sobre',
                            'title'   => 'Tipo de leyenda',
                        ],

                        'caption-position' => [
                            'bottom' => 'Abajo',
                            'title'  => 'Posición de la leyenda',
                            'top'    => 'Arriba',
                        ],

                        'background' => [
                            'dark'  => 'Oscuro',
                            'light' => 'Claro',
                            'title' => 'Fondo',
                        ],

                        'cyclic' => [
                            'no'    => 'No',
                            'title' => 'Cíclico',
                            'yes'   => 'Sí',
                        ],

                        'interval' => [
                            'info'  => 'Solo valores numéricos y deben estar entre 5000 y 99999',
                            'title' => 'Intervalo',
                        ],

                        'border' => [
                            'no'    => 'No',
                            'title' => 'Borde',
                            'yes'   => 'Sí',
                        ],

                        'slide-count' => [
                            'no'    => 'No',
                            'title' => 'Conteo de diapositivas',
                            'yes'   => 'Sí',
                        ],

                        'controls' => [
                            'no'    => 'No',
                            'title' => 'Controles',
                            'yes'   => 'Sí',
                        ],
                    ],
                ],
            ],
        ],

        'layouts' => [
            'image-gallery'  => 'Galería de imágenes',
            'manage-gallery' => 'Administrar galería',
            'manage-groups'  => 'Administrar grupos',
            'manage-images'  => 'Administrar imágenes',
        ],

        'image-gallery' => [
            'manage-images' => [
                'index' => [
                    'create' => 'Agregar Imágenes',
                    'title'  => 'Gestionar Imágenes',
                ],

                'create' => [
                    'back-btn'    => 'Atrás',
                    'description' => 'Descripción',
                    'disable'     => 'Desactivar',
                    'enable'      => 'Activar',
                    'general'     => 'General',
                    'image'       => 'Imagen',
                    'page-title'  => 'Agregar Imágenes',
                    'save-btn'    => 'Guardar Imágenes',
                    'sort'        => 'Ordenar',
                    'status'      => 'Estado',
                    'title'       => 'Título',
                ],

                'edit' => [
                    'back-btn'    => 'Atrás',
                    'description' => 'Descripción',
                    'disable'     => 'Desactivar',
                    'enable'      => 'Activar',
                    'general'     => 'General',
                    'image'       => 'Imagen',
                    'page-title'  => 'Editar Imágenes',
                    'save-btn'    => 'Guardar Imágenes',
                    'sort'        => 'Ordenar',
                    'status'      => 'Estado',
                    'title'       => 'Título',
                ],

                'create-success'      => 'Imágenes creadas con éxito.',
                'delete-failed'       => 'No se pudieron eliminar las imágenes.',
                'delete-success'      => 'Imágenes eliminadas con éxito.',
                'image-error'         => 'Imagen no encontrada.',
                'image-required'      => 'El campo de imagen es obligatorio.',
                'mass-delete-success' => 'Imágenes seleccionadas eliminadas con éxito.',
                'mass-update-success' => 'Imágenes seleccionadas actualizadas con éxito.',
                'update-success'      => 'Imágenes actualizadas con éxito.',
            ],

            'manage-gallery' => [
                'index' => [
                    'code-note' => 'Nota: El código de la galería debe ser alfanumérico sin espacios ni caracteres especiales.',
                    'create'    => 'Crear Galería',
                    'title'     => 'Gestionar Galería',
                ],

                'create' => [
                    'back-btn'           => 'Atrás',
                    'description'        => 'Descripción',
                    'disable'            => 'Desactivar',
                    'enable'             => 'Activar',
                    'gallery-code'       => 'Código de Galería',
                    'gallery-image'      => 'Imagen de Galería',
                    'gallery'            => 'Galería',
                    'id'                 => 'ID',
                    'image-title'        => 'Título de Imagen',
                    'page-title'         => 'Agregar Galería',
                    'save-btn'           => 'Guardar Galería',
                    'sort'               => 'Ordenar',
                    'status'             => 'Estado',
                    'thumbnail-image-id' => 'ID de Imagen en Miniatura',
                    'thumbnail'          => 'Miniatura',
                    'title'              => 'Título',
                ],

                'edit' => [
                    'back-btn'      => 'Atrás',
                    'disable'       => 'Desactivar',
                    'enable'        => 'Activar',
                    'gallery-code'  => 'Código de Galería',
                    'gallery-image' => 'Imagen de Galería',
                    'gallery'       => 'Galería',
                    'page-title'    => 'Editar Galería',
                    'save-btn'      => 'Guardar Galería',
                    'status'        => 'Estado',
                    'title'         => 'Título',
                ],

                'create-success'      => 'Galería creada con éxito.',
                'delete-failed'       => 'No se pudo eliminar la galería.',
                'delete-success'      => 'Galería eliminada con éxito.',
                'mass-delete-success' => 'Galerías seleccionadas eliminadas con éxito.',
                'mass-update-success' => 'Galerías seleccionadas actualizadas con éxito.',
                'update-success'      => 'Galería actualizada con éxito.',
            ],

            'manage-groups' => [
                'index' => [
                    'code-note' => 'Nota: El código del grupo debe ser alfanumérico sin espacios ni caracteres especiales.',
                    'create'    => 'Crear Grupos',
                    'title'     => 'Gestionar Grupos',
                ],

                'create' => [
                    'back-btn'           => 'Atrás',
                    'disable'            => 'Desactivar',
                    'enable'             => 'Activar',
                    'gallery-code'       => 'Código de Galería',
                    'gallery-title'      => 'Título de Galería',
                    'group-code'         => 'Código de Grupo',
                    'group'              => 'Grupo',
                    'id'                 => 'ID',
                    'image-ids'          => 'IDs de Imágenes',
                    'page-title'         => 'Agregar Grupo',
                    'save-btn'           => 'Guardar Grupo',
                    'status'             => 'Estado',
                    'thumbnail-image-id' => 'ID de Imagen en Miniatura',
                ],

                'edit' => [
                    'back-btn'      => 'Atrás',
                    'disable'       => 'Desactivar',
                    'enable'        => 'Activar',
                    'group-code'    => 'Código de Grupo',
                    'group'         => 'Grupo',
                    'page-title'    => 'Editar Grupo',
                    'save-btn'      => 'Guardar Galería',
                    'status'        => 'Estado',
                ],

                'create-success'      => 'Grupos creados con éxito.',
                'delete-failed'       => 'No se pudo eliminar el grupo.',
                'delete-success'      => 'Grupo eliminado con éxito.',
                'mass-delete-success' => 'Grupos seleccionados eliminados con éxito.',
                'mass-update-success' => 'Grupos seleccionados actualizados con éxito.',
                'update-success'      => 'Grupos actualizados con éxito.',
            ],

            'datagrid' => [
                'delete'              => 'Eliminar',
                'description'         => 'Descripción',
                'disable'             => 'Desactivar', 
                'edit'                => 'Editar',
                'enable'              => 'Activar', 
                'gallery-code'        => 'Código de Galería',
                'gallery-ids'         => 'ID de Galería',
                'gallery-title'       => 'Título de Galería',
                'group-code'          => 'Código de Grupo',
                'id'                  => 'ID',
                'image-ids'           => 'IDs de Imágenes',
                'image-title'         => 'Título de Imagen',
                'sort'                => 'Ordenar', 
                'status'              => 'Estado', 
                'thumbnail-image-id'  => 'ID de Imagen en Miniatura',
                'thumbnail'           => 'Miniatura', 
                'update'              => 'Actualizar',
            ],
        ],
    ], 

    'shop' => [
       'components' => [
            'categories' => [
                'gallery-description' => 'Bienvenido a nuestra Galería de Colecciones de Productos, una exhibición curada diseñada para inspirar e informar. Cada colección está cuidadosamente ensamblada para resaltar las características y beneficios únicos de nuestros productos.',
                'gallery-heading'     => 'Explora la Galería de Colecciones de Productos',
                'view-gallery'        => 'View Gallery',
            ],
        ],

        'image-gallery' => [
            'gallery'          => 'Gallery',
            'images'           => 'Images',
            'no-gallery-found' => 'Galería no disponible.',
            'no-image-found'   => 'Imagen no disponible.',
            'view-gallery'     => 'View Gallery',
        ],
    ],
];