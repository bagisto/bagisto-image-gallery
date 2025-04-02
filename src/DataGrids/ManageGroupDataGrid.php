<?php

namespace Webkul\ImageGallery\DataGrids;

use Illuminate\Support\Facades\DB;
use Webkul\DataGrid\DataGrid;

class ManageGroupDataGrid extends DataGrid
{
    /**
     * Prepare query builder.
     *
     * @return \Illuminate\Database\Query\Builder
     */
    public function prepareQueryBuilder()
    {
        /* query builder */
        $queryBuilder = DB::table('manage_groups');

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
            'sortable'   => true,
            'filterable' => true,
        ]);

        $this->addColumn([
            'index'      => 'group_code',
            'label'      => trans('image-gallery::app.admin.image-gallery.datagrid.group-code'),
            'type'       => 'string',
            'searchable' => true,
            'sortable'   => false,
            'filterable' => true,
        ]);

        $this->addColumn([
            'index'      => 'gallery_ids',
            'label'      => trans('image-gallery::app.admin.image-gallery.datagrid.gallery-ids'),
            'type'       => 'string',
            'searchable' => true,
            'sortable'   => false,
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
    
    /**
     * Prepare Actions.
     * 
     * @return void
     */
    public function prepareActions()
    {
        $this->addAction([
            'title'  => trans('image-gallery::app.admin.image-gallery.datagrid.edit'),
            'method' => 'GET',
            'icon'   => 'icon-edit',
            'url'    => function ($row) {
                return route('admin.image-gallery.manage-groups.edit', $row->id);
            },
        ]);

        $this->addAction([
            'title'  => 'image-gallery::app.admin.image-gallery.datagrid.delete',
            'method' => 'POST',
            'icon'   => 'icon-delete',
            'url'    => function ($row) {
                return route('admin.image-gallery.manage-groups.delete', $row->id);
            },
        ]);
    }

    /**
     * Prepare Mass Actions.
     * 
     * @return void
     */
    public function prepareMassActions()
    {
        $this->addMassAction([
            'title'  => trans('image-gallery::app.admin.image-gallery.datagrid.delete'),
            'method' => 'POST',
            'url'    => route('admin.image-gallery.manage-groups.mass-delete'),
            'icon'   => 'icon-delete',
        ]);

        $this->addMassAction([
            'title'   => trans('image-gallery::app.admin.image-gallery.datagrid.update'),
            'method'  => 'POST',
            'url'     => route('admin.image-gallery.manage-groups.mass-update'),
            'icon'    => 'icon-edit',
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