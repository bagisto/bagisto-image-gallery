<?php

namespace Webkul\ImageGallery\DataGrids;

use Illuminate\Support\Facades\DB;
use Webkul\DataGrid\DataGrid;

class ManageGalleryForGroupsDatagrid extends DataGrid
{
    /**
    * Prepare query builder.
    *
    * @return \Illuminate\Database\Query\Builder
    */
    public function prepareQueryBuilder()
    {
        $queryBuilder = DB::table('manage_galleries')
            ->where('status', 1)
            ->orderBy('id', 'asc');

        $this->addFilter('id', 'manage_galleries.id');
        $this->addFilter('gallery_title', 'manage_galleries.gallery_title');
        $this->addFilter('gallery_code', 'manage_galleries.gallery_code');
        $this->addFilter('image_ids', 'manage_galleries.image_ids');
        $this->addFilter('thumbnail_image_id', 'manage_galleries.thumbnail_image_id');
        $this->addFilter('status', 'manage_galleries.status');

        return $queryBuilder;
    }
    
    /**
     * Prepare Columns.
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
            'index'      => 'gallery_title',
            'label'      => trans('image-gallery::app.admin.image-gallery.datagrid.gallery-title'),
            'type'       => 'string',
            'sortable'   => false,
            'searchable' => true,
            'filterable' => true,
        ]);

        $this->addColumn([
            'index'      => 'gallery_code',
            'label'      => trans('image-gallery::app.admin.image-gallery.datagrid.gallery-code'),
            'type'       => 'string',
            'sortable'   => false,
            'searchable' => true,
            'filterable' => true,
        ]);

        $this->addColumn([
            'index'      => 'image_ids',
            'label'      => trans('image-gallery::app.admin.image-gallery.datagrid.image-ids'),
            'type'       => 'string',
            'sortable'   => false,
            'searchable' => true,
            'filterable' => true,
        ]);

        $this->addColumn([
            'index'      => 'thumbnail_image_id',
            'label'      => trans('image-gallery::app.admin.image-gallery.datagrid.thumbnail-image-id'),
            'type'       => 'string',
            'sortable'   => false,
            'searchable' => true,
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