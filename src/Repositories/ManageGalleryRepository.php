<?php

namespace Webkul\ImageGallery\Repositories;

use Illuminate\Support\Facades\DB;
use Webkul\Core\Eloquent\Repository;
use Webkul\ImageGallery\Contracts\ManageGallery;
use Webkul\ImageGallery\Models\ManageGalleryProxy;

class ManageGalleryRepository extends Repository
{
    /**
     * Specify Model class name.
     *
     * @return mixed
     */
    public function model()
    {
        return ManageGallery::class;
    }

    /**
     * Get Category tree of gallery.
     *
     * @return mixed
     */
    public function getCategoryTree($id = null)
    {
        return $id
            ? $this->model::orderBy('id', 'ASC')->where('id', '!=', $id)->get()
            : $this->model::orderBy('id', 'ASC')->get();
    }
    
    /**
     * Get Category tree for shop images.
     * 
     * @return mixed
     */
    public function getCategoryTreeForShopImage($id = null)
    {
        $images = DB::table('manage_galleries')
            ->where('id', $id)->get();

        foreach ($images as $image) {
            
            $string[] = $image->image_ids;
        }

        foreach ($string as $str) {
            $strArr[] = array_map('intval', explode(',', $str));
        }

        foreach ($images as $key => $image) {
            $image->image_ids = $strArr[$key];
        }

        foreach ($images as $key => $image) {
            if (!in_array($image->thumbnail_image_id, $image->image_ids, TRUE)) {
                array_unshift($image->image_ids, $image->thumbnail_image_id);
            }
        }
        
        return $images;
    }
    
    /**
     * Get Category tree for shop.
     * 
     * @return mixed
     */
    public function getCategoryTreeForShop($id = null)
    {
        $manageGalleries= $id
            ? $this->model::orderBy('id', 'ASC')->where('id', '!=', $id)->get()
            : $this->model::orderBy('id', 'ASC')->get();

        if (sizeof($manageGalleries) <= 0) {
            return redirect()->back();
        }

        foreach ($manageGalleries as $manageGallery) {            
            $string[] = $manageGallery->image_ids;
        }

        foreach ($string as $str) {
            $strArr[] = array_map('intval', explode(',', $str));
        }
        
        foreach ($manageGalleries as $key => $manageGallery) {            
            $manageGallery->image_ids = $strArr[$key];
        }
        
        return $manageGalleries;
    }
   
    /**
     * Get Category tree without descendents.
     * 
     * @return mixed
     */
    public function getCategoryTreeWithoutDescendant($id = null)
    {
        return $id
            ? $this->model::orderBy('id', 'ASC')->where('id', '!=', $id)->get()
            : $this->model::orderBy('id', 'ASC')->get();
    }

    /**
     * Check if Slugs is Unique.
     * 
     * @return boolean
     */
    public function isSlugUnique($id, $slug)
    {   
        $exists = ManageGalleryProxy::modelClass()::where('id', '<>', $id)
            ->where('slug', $slug)
            ->limit(1)
            ->select(DB::raw(1))
            ->exists();

        return $exists ? false : true;
    }
}