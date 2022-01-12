<?php

namespace Webkul\ImageGallery\DataGrids;

use Webkul\Core\Models\Locale;
use Webkul\Ui\DataGrid\DataGrid;
use Illuminate\Support\Facades\DB;
use Webkul\Core\Models\Channel;

class ManageGalleryForManageGroupDataGrid extends DataGrid
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

        $this->setQueryBuilder($queryBuilder);
    }

    public function addColumns()
    {
        $this->addColumn([
            'index'      => 'id',
            'label'      => 'Id',
            'type'       => 'number',
            'searchable' => false,
            'sortable'   => false,
            'filterable' => false,
            'closure'  => true,
            'wrapper' => function($row) {
                
                return '<span><input type="checkbox" name="gallery_ids[]" value="'.$row->id.'" class="gridcheckbox"></span>';
            }
        ]);


        $this->addColumn([
            'index'      => 'gallery_title',
            'label'      => 'Gallery Title',
            'type'       => 'string',
            'searchable' => false,
            'sortable'   => false,
            'filterable' => false,
        ]);

        $this->addColumn([
            'index'      => 'gallery_code',
            'label'      => 'Gallery Code',
            'type'       => 'string',
            'searchable' => false,
            'sortable'   => false,
            'filterable' => false,
        ]);

        $this->addColumn([
            'index'      => 'image_ids',
            'label'      => 'Image Ids',
            'type'       => 'string',
            'sortable'   => false,
            'searchable' => false,
            'filterable' => false,
        ]);
    }

    public function prepareActions()
    {
    }

    public function prepareMassActions()
    {
    }
}
