<?php

namespace Webkul\ImageGallery\DataGrids;

use Webkul\Core\Models\Locale;
use Webkul\Ui\DataGrid\DataGrid;
use Illuminate\Support\Facades\DB;
use Webkul\Core\Models\Channel;

class ImageGalleryForManageImageDataGrid extends DataGrid
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
        $queryBuilder = DB::table('image_galleries')->where('status', 1)->orderBy('sort','asc');


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
                
                return '<span><input type="checkbox" name="image_ids[]" value="'.$row->id.'" class="gridcheckbox"></span>';
            }
        ]);

        $this->addColumn([
            'index'      => 'id',
            'label'      => 'Thumbnail',
            'type'       => 'number',
            'searchable' => false,
            'sortable'   => false,
            'filterable' => false,
            'closure'  => true,
            'wrapper' => function($row) {                
                return '<span><input type="radio" name="thumbnail_image_id" value="'. $row->id .'" class="gridradio"></span>';
            }
        ]);

        $this->addColumn([
            'index'      => 'image',
            'label'      => 'Image',
            'type'       => 'string',
            'searchable' => false,
            'sortable'   => false,
            'filterable' => false,
            'closure'  => true,
            'wrapper' => function($row) {
                return '<img src="' . asset('storage/'. $row->image) . '" class="imagegallery">';
                }
            
        ]);

        $this->addColumn([
            'index'      => 'title',
            'label'      => 'Image Title',
            'type'       => 'string',
            'sortable'   => false,
            'searchable' => false,
            'filterable' => false,
        ]);

        $this->addColumn([
            'index'      => 'description',
            'label'      => 'Description',
            'type'       => 'string',
            'searchable' => false,
            'sortable'   => false,
            'filterable' => false,
        ]);  
    }



    public function prepareMassActions()
    {
       
    }
}
