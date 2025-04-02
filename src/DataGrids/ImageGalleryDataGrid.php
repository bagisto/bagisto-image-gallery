<?php

namespace Webkul\ImageGallery\DataGrids;

use Illuminate\Support\Facades\DB;
use Webkul\DataGrid\DataGrid;

class ImageGalleryDataGrid extends DataGrid
{
    /**
     * Prepare query builder.
     *
     * @return \Illuminate\Database\Query\Builder
     */
    public function prepareQueryBuilder()
    {
        $queryBuilder = DB::table('image_galleries');

        $this->addFilter('id', 'image_galleries.id');
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
            'sortable'   => true,
            'filterable' => true,
        ]);

        $this->addColumn([
            'index'      => 'image',
            'label'      => trans('image-gallery::app.admin.image-gallery.datagrid.thumbnail'),
            'type'       => 'string',
            'searchable' => false,
            'sortable'   => false,
            'filterable' => false,
            'closure'    => function($row) {
                return '<img class="max-h-[65px] min-h-[65px] min-w-[65px] max-w-[65px] rounded-[4px]" src="' . asset('storage/'. $row->image) . '">';
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
            'type'       => 'integer',
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
                    return '<p class="label-active">'.trans('image-gallery::app.admin.image-gallery.datagrid.enable').'</p>';
                } 

                return  '<p class="label-info">'.trans('image-gallery::app.admin.image-gallery.datagrid.disable').'</p>'; 
            },
        ]);
    }
    
    /**
     * Prepare Actions.
     * 
     * @return void
     */
    public function prepareActions()
    {
        $this->addAction([
            'title'  => 'image-gallery::app.admin.image-gallery.datagrid.edit',
            'method' => 'GET',
            'icon'   => 'icon-edit',
            'url'    => function ($row) {
                return route('admin.image-gallery.manage-images.edit', $row->id);
            },
        ]);

        $this->addAction([
            'title'  => 'image-gallery::app.admin.image-gallery.datagrid.delete',
            'method' => 'POST',
            'icon'   => 'icon-delete',
            'url'    => function ($row) {
                return route('admin.image-gallery.manage-images.delete', $row->id);
            },
        ]);
    }

    /*
     * Prepare Mass Actions.
     * 
     * @return void
     */
    public function prepareMassActions()
    {
        $this->addMassAction([
            'icon'   => 'icon-delete',
            'title'  => trans('image-gallery::app.admin.image-gallery.datagrid.delete'),
            'url'    => route('admin.image-gallery.manage-images.mass-delete'),
            'method' => 'POST'
        ]);

        $this->addMassAction([
            'icon'    => 'icon-edit',
            'title'   => trans('image-gallery::app.admin.image-gallery.datagrid.update'),
            'url'     => route('admin.image-gallery.manage-images.mass-update'),
            'method'  => 'POST',
            'options' => [
                [
                    'label' => trans('image-gallery::app.admin.image-gallery.datagrid.enable'),
                    'value' => 1,
                ], [
                    'label' => trans('image-gallery::app.admin.image-gallery.datagrid.disable'),
                    'value' => 0,
                ],
            ],
        ]);
    }
}