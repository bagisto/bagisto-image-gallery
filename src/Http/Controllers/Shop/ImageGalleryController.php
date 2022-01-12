<?php

namespace Webkul\ImageGallery\Http\Controllers\Shop;

use Illuminate\Routing\Controller;
use Webkul\ImageGallery\Repositories\ImageGalleryRepository;
use Webkul\ImageGallery\Repositories\ManageGalleryRepository;
use Webkul\ImageGallery\Repositories\ManageGroupRepository;

class ImageGalleryController extends Controller
{

    /**
     * Contains route related configuration
     *
     * @var array
     */
    protected $_config;
    protected $imageGalleryRepository;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(
        ImageGalleryRepository $imageGalleryRepository,
        ManageGalleryRepository $manageGalleryRepository,
        ManageGroupRepository $manageGroupRepository
    )
    {
        $this->imageGalleryRepository = $imageGalleryRepository;
        $this->manageGalleryRepository = $manageGalleryRepository;
        $this->manageGroupRepository = $manageGroupRepository;

        $this->_config = request('_config');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
   


    public function index()
    {
        
        $managegalleries = $this->manageGalleryRepository->getCategoryTreeForShop();        
        
        foreach ($managegalleries as $key => $managegallery) {
            if (!isset($managegallery->image_ids))
            {
                session()->flash('info', 'Sorry! No images found.');

                return redirect()->back();
            }
            if($managegallery->image_ids[0] == 0 && $managegallery->thumbnail_image_id == null)
            {
                unset($managegalleries[$key]);
            }
            $managegallery['image_name']= $this->imageGalleryRepository->getCategoryTreeForShop($managegallery->image_ids,$managegallery->thumbnail_image_id);
            // if(($managegallery->image_name)->isEmpty())
            // {
            //     unset($managegalleries[$key]);
            // }
            
        }
        
        return view($this->_config['view'], compact('managegalleries'));
    }

    public function indeximage($id)
    {
        
        $categories = $this->manageGalleryRepository->getCategoryTreeForShopImage($id);
        foreach ($categories as $key => $category) {
            $category->image_name = $this->imageGalleryRepository->getCategoryTreeForShop($category->image_ids);
        }
        
        
        return view($this->_config['view'], compact('categories'));
        // return response()->json($categories);
    }
}
