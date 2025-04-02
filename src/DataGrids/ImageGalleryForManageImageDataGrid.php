<?php

namespace Webkul\ImageGallery\DataGrids;

use Webkul\DataGrid\DataGrid;
use Illuminate\Support\Facades\DB;

class ImageGalleryForManageImageDataGrid extends DataGrid
{  
    /**
     * Index.
     *
     * @var string
     */
    protected $primaryColumn = 'id';

    /**
    * Prepare query builder.
    *
    * @return \Illuminate\Database\Query\Builder
    */
    public function prepareQueryBuilder()
    {
        $queryBuilder = DB::table('image_galleries')
            ->where('status', 1)
            ->orderBy('image_galleries.id', 'asc')
            ->select(
               'image_galleries.id as id',
               'image_galleries.id as thumbnail_image_id',
               'image_galleries.image as image',
               'image_galleries.title as title',
               'image_galleries.description as description',
               'image_galleries.sort as sort',
               'image_galleries.status as status',
            );

        $this->addFilter('id', 'image_galleries.id');
        $this->addFilter('thumbnail_image_id', 'image_galleries.id');
        $this->addFilter('image', 'image_galleries.index');
        $this->addFilter('title', 'image_galleries.title');
        $this->addFilter('description', 'image_galleries.description');
        $this->addFilter('sort', 'image_galleries.sort');
        $this->addFilter('status', 'image_galleries.status');

        return $queryBuilder;
    }
   
    /**
     * Prepare columns.
     * 
     * @return void
     */
    public function prepareColumns()
    {
        $this->addColumn([
            'index'      => 'id',
            'label'      => trans('image-gallery::app.admin.image-gallery.datagrid.id'),
            'type'       => 'integer',
            'searchable' => false,
            'sortable'   => false,
            'filterable' => false,
        ]);

        $this->addColumn([
            'index'      => 'thumbnail_image_id',
            'label'      => trans('image-gallery::app.admin.image-gallery.datagrid.thumbnail-image-id'),
            'type'       => 'integer',
            'sortable'   => false,
            'searchable' => false,
            'filterable' => false,
        ]);

        $this->addColumn([
            'index'      => 'image',
            'label'      => trans('image-gallery::app.admin.image-gallery.datagrid.thumbnail'),
            'type'       => 'string',
            'searchable' => false,
            'sortable'   => false,
            'filterable' => false,
            'closure'    => function($row) {
                return asset('storage/'. $row->image);
            },
        ]);

        $this->addColumn([
            'index'      => 'title',
            'label'      => trans('image-gallery::app.admin.image-gallery.datagrid.image-title'),
            'type'       => 'string',
            'sortable'   => true,
            'searchable' => true,
            'filterable' => true,
        ]);

        $this->addColumn([
            'index'      => 'description',
            'label'      => trans('image-gallery::app.admin.image-gallery.datagrid.description'),
            'type'       => 'string',
            'searchable' => true,
            'sortable'   => true,
            'filterable' => true,
        ]);

        $this->addColumn([
            'index'      => 'sort',
            'label'      => trans('image-gallery::app.admin.image-gallery.datagrid.sort'),
            'type'       => 'string',
            'searchable' => true,
            'sortable'   => true,
            'filterable' => true,
        ]);

        $this->addColumn([
            'index'              => 'status',
            'label'              => trans('image-gallery::app.admin.image-gallery.datagrid.status'),
            'type'               => 'string',
            'sortable'           => true,
            'searchable'         => false,
            'filterable'         => true,
            'filterable_type'    => 'dropdown',
            'filterable_options' => [
                [
                    'label' => trans('image-gallery::app.admin.image-gallery.datagrid.enable'),
                    'value' => 1,
                ], [
                    'label' => trans('image-gallery::app.admin.image-gallery.datagrid.disable'),
                    'value' => 0,
                ],
            ],
            'closure'            => function ($row) {
                if ($row->status) {
                    return '<p class="label-active">' .trans('image-gallery::app.admin.image-gallery.datagrid.enable') . '</p>';
                } 

                return  '<p class="label-info">' .trans('image-gallery::app.admin.image-gallery.datagrid.disable') . '</p>'; 
            },
        ]);
    }
}