<?php

namespace Webkul\ImageGallery\DataGrids;

use Webkul\Core\Models\Locale;
use Webkul\Ui\DataGrid\DataGrid;
use Illuminate\Support\Facades\DB;
use Webkul\Core\Models\Channel;

class ImageGalleryDataGrid extends DataGrid
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
        $queryBuilder = DB::table('image_galleries');


        $this->addFilter('id', 'image_galleries.id');
        $this->addFilter('image', 'image_galleries.index');
        $this->addFilter('title', 'image_galleries.title');
        $this->addFilter('description', 'image_galleries.description');
        $this->addFilter('sort', 'image_galleries.sort');
        $this->addFilter('status', 'image_galleries.status');

        $this->setQueryBuilder($queryBuilder);
    }

    public function addColumns()
    {
        $this->addColumn([
            'index'      => 'id',
            'label'      => trans('imagegallery::app.datagrid.image_gallery.id'),
            'type'       => 'number',
            'searchable' => false,
            'sortable'   => true,
            'filterable' => true,
        ]);

        $this->addColumn([
            'index'      => 'image',
            'label'      => trans('imagegallery::app.datagrid.image_gallery.thumbnail'),
            'type'       => 'image',
            'searchable' => false,
            'sortable'   => false,
            'filterable' => false,
            'closure'     => true,
            'wrapper' => function($row) {
                return '<img src="' . asset('storage/'. $row->image) . '" class="imagegallery">';
                }
       
                
        ]);

        $this->addColumn([
            'index'      => 'title',
            'label'      => trans('imagegallery::app.datagrid.image_gallery.image_title'),
            'type'       => 'string',
            'sortable'   => true,
            'searchable' => true,
            'filterable' => true,
        ]);

        $this->addColumn([
            'index'      => 'description',
            'label'      => trans('imagegallery::app.datagrid.image_gallery.description'),
            'type'       => 'string',
            'searchable' => true,
            'sortable'   => true,
            'filterable' => true,
        ]);

        $this->addColumn([
            'index'      => 'sort',
            'label'      => trans('imagegallery::app.datagrid.image_gallery.sort'),
            'type'       => 'number',
            'searchable' => true,
            'sortable'   => true,
            'filterable' => false,
        ]);

        $this->addColumn([
            'index'      => 'status',
            'label'      => trans('imagegallery::app.datagrid.image_gallery.status'),
            'type'       => 'boolean',
            'sortable'   => true,
            'searchable' => false,
            'filterable' => true,
            'wrapper'    => function ($value) {
                if ($value->status == 1) {
                    return trans('imagegallery::app.datagrid.image_gallery.enable');
                } else {
                    return trans('imagegallery::app.datagrid.image_gallery.disable');
                }
            },
        ]);
    }

    public function prepareActions()
    {
        $this->addAction([
            'title'     => 'Edit',
            'method'    => 'GET',
            'route'     => 'imagegallery.admin.manageimages.edit',
            'icon'      => 'icon pencil-lg-icon',
            'condition' => function () {
                return true;
            },
        ]);

        $this->addAction([
            'title'        => 'Delete',
            'method'       => 'POST',
            'route'        => 'imagegallery.admin.manageimages.delete',
            'confirm_text' => 'Do you really want to delete it....',
            'icon'         => 'icon trash-icon',
        ]);   
    }

    public function prepareMassActions()
    {
        $this->addMassAction([
            'type' => 'delete',
            'label' => trans('imagegallery::app.datagrid.image_gallery.delete'),
            'action' => route('imagegallery.admin.manageimages.massdelete'),
            'method' => 'POST'
        ]);

        $this->addMassAction([
            'type' => 'update',
            'label' => trans('imagegallery::app.datagrid.image_gallery.update'),
            'action' => route('imagegallery.admin.manageimages.massupdate'),
            'method' => 'POST',
            'options' => [
                'Enable' => 1,
                'Disable' => 0
            ]
        ]);

        $this->enableMassAction = true;
    }



   
}
