<?php

namespace Webkul\ImageGallery\DataGrids;

use Webkul\Core\Models\Locale;
use Webkul\Ui\DataGrid\DataGrid;
use Illuminate\Support\Facades\DB;
use Webkul\Core\Models\Channel;

class ManageGalleryDataGrid extends DataGrid
{
    protected $sortOrder = 'desc';

    protected $index = 'id';

    protected $itemsPerPage = 10;

    public function __construct()
    {
        parent::__construct();

    }

    public function prepareQueryBuilder()
    {
        

        /* query builder */
        $queryBuilder = DB::table('manage_galleries');




        $this->addFilter('id', 'manage_galleries.id');
        $this->addFilter('gallery_title', 'manage_galleries.gallery_title');
        $this->addFilter('gallery_code', 'manage_galleries.gallery_code');
        $this->addFilter('image_ids', 'manage_galleries.image_ids');
        $this->addFilter('thumbnail_image_id', 'manage_galleries.thumbnail_image_id');
        $this->addFilter('status', 'manage_galleries.status');

        $this->setQueryBuilder($queryBuilder);
    }

    public function addColumns()
    {
        $this->addColumn([
            'index'      => 'id',
            'label'      => trans('imagegallery::app.datagrid.manage_gallery.id'),
            'type'       => 'number',
            'searchable' => true,
            'sortable'   => true,
            'filterable' => true,
        ]);

        $this->addColumn([
            'index'      => 'gallery_title',
            'label'      => trans('imagegallery::app.datagrid.manage_gallery.gallery_title'),
            'type'       => 'string',
            'sortable'   => false,
            'searchable' => true,
            'filterable' => false,
        ]);

        $this->addColumn([
            'index'      => 'gallery_code',
            'label'      => trans('imagegallery::app.datagrid.manage_gallery.gallery_code'),
            'type'       => 'string',
            'sortable'   => false,
            'searchable' => true,
            'filterable' => false,
        ]);

        $this->addColumn([
            'index'      => 'image_ids',
            'label'      => trans('imagegallery::app.datagrid.manage_gallery.image_ids'),
            'type'       => 'string',
            'sortable'   => false,
            'searchable' => true,
            'filterable' => false,
        ]);

        $this->addColumn([
            'index'      => 'thumbnail_image_id',
            'label'      => trans('imagegallery::app.datagrid.manage_gallery.thumbnail_image_id'),
            'type'       => 'number',
            'sortable'   => false,
            'searchable' => true,
            'filterable' => false,
        ]);

        $this->addColumn([
            'index'      => 'status',
            'label'      => trans('imagegallery::app.datagrid.manage_gallery.status'),
            'type'       => 'boolean',
            'sortable'   => true,
            'searchable' => false,
            'filterable' => true,
            'wrapper'    => function ($value) {
                if ($value->status == 1) {
                    return trans('imagegallery::app.datagrid.manage_gallery.enable');
                } else {
                    return trans('imagegallery::app.datagrid.manage_gallery.disable');
                }
            },
        ]);
    }

    public function prepareActions()
    {
        $this->addAction([
            'title'     => 'Edit',
            'method'    => 'GET',
            'route'     => 'imagegallery.admin.managegallery.edit',
            'icon'      => 'icon pencil-lg-icon',
        ]);

        $this->addAction([
            'title'        => 'Delete',
            'method'       => 'POST',
            'route'        => 'imagegallery.admin.managegallery.delete',
            'confirm_text' => 'Do you really want to delete it....',
            'icon'         => 'icon trash-icon',
        ]);   
    }

    public function prepareMassActions()
    {
        
    }
   
}