<?php

namespace Webkul\ImageGallery\Repositories;


use Illuminate\Support\Facades\Storage;
use Webkul\Core\Eloquent\Repository;
use Webkul\ImageGallery\Models\ImageGallery;
use Webkul\ImageGallery\Models\ImageGalleryProxy;
use Illuminate\Support\Facades\DB;

class ImageGalleryRepository extends Repository
{
    
    public function model()
    {
        return 'Webkul\ImageGallery\Models\ImageGallery';
    }

    
    public function create(array $data)
    {

        if (isset($data['locale']) && $data['locale'] == 'all') {
            $model = app()->make($this->model());

            foreach (core()->getAllLocales() as $locale) {
                foreach ($model->translatedAttributes as $attribute) {
                    if (isset($data[$attribute])) {
                        $data[$locale->code][$attribute] = $data[$attribute];
                        $data[$locale->code]['locale_id'] = $locale->id;
                    }
                }
            }
        }

        $imagegallery = $this->model->create($data);

        $this->uploadImages($data, $imagegallery);

        if (isset($data['attributes'])) {
            $imagegallery->filterableAttributes()->sync($data['attributes']);
        }

        return $imagegallery;
    }

    public function getCategoryTree($id = null)
    {
        return $id
               ? $this->model::orderBy('id', 'ASC')->where('id', '!=', $id)->get()
               : $this->model::orderBy('id', 'ASC')->get();
    } 

    public function getCategoryTreeForShop($ids = null, $thumbnail = null)
    {
        foreach ($ids as $id) {
            $idc[] = (int)$id;
       }
       if($thumbnail!=null)
       {
       if (!in_array($thumbnail, $idc, TRUE))
       {
           array_unshift($idc,$thumbnail);
       }   
       }
       
       $orders = array_map(function($idc) {
           return "id = {$idc} desc";
       }, $ids);
       $rawOrder = implode(', ', $orders);
       
       $images = DB::table('image_galleries')->where('status', 1)
                   ->whereIn('id', $idc)->get();
       
       return $images;

    }

    public function getCategoryTreeWithoutDescendant($id = null)
    {
        return $id
               ? $this->model::orderBy('sort', 'ASC')->where('id', '!=', $id)->get()
               : $this->model::orderBy('sort', 'ASC')->get();
    }

    public function isSlugUnique($id, $slug)
    {   
        $exists = ImageGalleryProxy::modelClass()::where('id', '<>', $id)
            ->where('slug', $slug)
            ->limit(1)
            ->select(DB::raw(1))
            ->exists();

        return $exists ? false : true;
    }

    public function update(array $data, $id)
    {
        $category = $this->find($id);

        $value = $data;
        
        unset($data['image']);


        $category->update($data);

        if(!$value['image']['image_0'] == "")
        {
            $this->uploadImages($value, $category);
        }

        return $category;
    }


    public function uploadImages($data, $imagegallery, $type = "image")
    {
        if (isset($data[$type])) {
            $request = request();

            foreach ($data[$type] as $imageId => $image) {
                $file = $type . '.' . $imageId;
                $dir = 'imagegallery/' . $imagegallery->id;

                if ($request->hasFile($file)) {
                    if ($imagegallery->{$type}) {
                        Storage::delete($imagegallery->{$type});
                    }

                    $imagegallery->{$type} = $request->file($file)->store($dir);
                    $imagegallery->save();
                }
            }
        } else {
            if ($imagegallery->{$type}) {
                Storage::delete($imagegallery->{$type});
            }

            $imagegallery->{$type} = null;
            $imagegallery->save();
        }
    }


}