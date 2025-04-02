<?php

namespace Webkul\ImageGallery\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use Webkul\ImageGallery\Repositories\ImageGalleryRepository;
use Webkul\ImageGallery\Repositories\ManageGalleryRepository;
use Webkul\ImageGallery\Repositories\ManageGroupRepository;

class ImageGalleryController extends Controller
{  
    /**
     * @var int
     */
    public const ACTIVE = 1;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(
        protected ImageGalleryRepository $imageGalleryRepository,
        protected ManageGalleryRepository $manageGalleryRepository,
        protected ManageGroupRepository $manageGroupRepository,
    ) {
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $manageGalleries = $this->manageGalleryRepository->findWhere([
            'status' => self::ACTIVE,
        ]);        
        
        foreach ($manageGalleries as $key => $manageGallery) {
            if (
                ! $manageGallery->image_ids
                && ! $manageGallery->thumbnail_image_id
            ) {
                unset($manageGalleries[$key]);
            }

            $manageGallery->image_ids = explode(',', $manageGallery->image_ids);

            $manageGallery['image_name']= $this->imageGalleryRepository->getCategoryTreeForShop($manageGallery->image_ids, $manageGallery->thumbnail_image_id);
        }
        
        return view('image-gallery::shop.index')->with('manageGalleries', $manageGalleries);
    }
    
    /**
     * Get Index Images.
     * 
     * @return \Illuminate\view\view
     */
    public function indexImage($id)
    {
        $categories = $this->manageGalleryRepository->getCategoryTreeForShopImage($id);
         
        $images = [];

        foreach ($categories as $category) {
            $images = $this->imageGalleryRepository->getCategoryTreeForShop($category->image_ids);
        }

        foreach ($images as $image) {
            $image->image =  asset('storage/' .$image->image);
        }

        $gallery = $this->manageGalleryRepository->find($id);

        if (empty($gallery->status)) {
            return redirect('/');
        }

        return view('image-gallery::shop.image', compact('gallery', 'images'));
    }
}