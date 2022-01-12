<?php

namespace Webkul\ImageGallery\DataGrids;

use Webkul\Core\Models\Locale;
use Webkul\Ui\DataGrid\DataGrid;
use Illuminate\Support\Facades\DB;
use Webkul\Core\Models\Channel;

class ManageGroupDataGrid extends DataGrid
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
        $queryBuilder = DB::table('manage_groups');



            

        // $this->addFilter('gallery_ids', 'manage_groups.gallery_ids');
        // $this->addFilter('product_name', 'product_flat.name');
        // $this->addFilter('product_sku', 'products.sku');
        // $this->addFilter('status', 'product_flat.status');
        // $this->addFilter('product_type', 'products.type');
        // $this->addFilter('attribute_family', 'attribute_families.name');

        $this->setQueryBuilder($queryBuilder);
    }

    public function addColumns()
    {
        $this->addColumn([
            'index'      => 'id',
            'label'      => trans('imagegallery::app.datagrid.manage_group.id'),
            'type'       => 'number',
            'searchable' => false,
            'sortable'   => true,
            'filterable' => true,
        ]);

        $this->addColumn([
            'index'      => 'group_code',
            'label'      => trans('imagegallery::app.datagrid.manage_group.group_code'),
            'type'       => 'string',
            'searchable' => true,
            'sortable'   => false,
            'filterable' => false,
        ]);

        $this->addColumn([
            'index'      => 'gallery_ids',
            'label'      => trans('imagegallery::app.datagrid.manage_group.group_code'),
            'type'       => 'string',
            'searchable' => true,
            'sortable'   => false,
            'filterable' => false,
        ]);

        $this->addColumn([
            'index'      => 'status',
            'label'      => trans('imagegallery::app.datagrid.manage_group.status'),
            'type'       => 'boolean',
            'sortable'   => true,
            'searchable' => false,
            'filterable' => true,
            'wrapper'    => function ($value) {
                if ($value->status == 1) {
                    return trans('imagegallery::app.datagrid.manage_group.enable');
                } else {
                    return trans('imagegallery::app.datagrid.manage_group.disable');
                }
            },
        ]);

        
    }

    public function prepareActions()
    {
        $this->addAction([
            'title'     => 'Edit',
            'method'    => 'GET',
            'route'     => 'imagegallery.admin.managegroups.edit',
            'icon'      => 'icon pencil-lg-icon',
            'condition' => function () {
                return true;
            },
        ]);

        $this->addAction([
            'title'        => 'Delete',
            'method'       => 'POST',
            'route'        => 'imagegallery.admin.managegroups.delete',
            'confirm_text' => 'Do you really want to delete it....',
            'icon'         => 'icon trash-icon',
        ]);
    }

    public function prepareMassActions()
    {
       
    }
}
