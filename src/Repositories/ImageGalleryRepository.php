<?php

namespace Webkul\ImageGallery\Repositories;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\ImageManager;
use Webkul\Core\Eloquent\Repository;
use Webkul\ImageGallery\Contracts\ImageGallery;
use Webkul\ImageGallery\Models\ImageGalleryProxy;

class ImageGalleryRepository extends Repository
{
    /**
     * @var int
     */
    public const ACTIVE = 1;

    /**
     * Specify Model class name.
     *
     * @return string
     */
    public function model()
    {
        return ImageGallery::class;
    }

    /**
     * Create new Resources.
     * 
     * @param  array $data
     * @return object
     */
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

        $imageGallery = $this->model->create([
            'title'       => $data['title'],
            'description' => $data['description'],
            'sort'        => $data['sort'],
            'status'      => $data['status'],
        ]);

        $this->uploadImages($data, $imageGallery);

        if (isset($data['attributes'])) {
            $imageGallery->filterableAttributes()->sync($data['attributes']);
        }

        return $imageGallery;
    }
    
    /**
     * Get Category Tree of images.
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
     * Get category Tree for Shop.
     * 
     * @return mixed
     */
    public function getCategoryTreeForShop($ids = null, $thumbnail = null)
    {
        foreach ($ids as $id) {
            $idc[] = (int)$id;
        }

        if  ($thumbnail!=null) {
            if (!in_array($thumbnail, $idc, TRUE)) {
                array_unshift($idc,$thumbnail);
            }  
        }
       
       $images = DB::table('image_galleries')->where('status', self::ACTIVE)
            ->whereIn('id', $idc)->get();
       
       return $images;
    }

    /**
     * Get Category Tree with Descendants.
     * 
     * @return mixed
     */
    public function getCategoryTreeWithoutDescendant($id = null)
    {
        return $id
            ? $this->model::orderBy('sort', 'ASC')->where('id', '!=', $id)->get()
            : $this->model::orderBy('sort', 'ASC')->get();
    }
    
    /**
     * Check if Slug is unique.
     * 
     * @param int $id 
     * @param mixed $slug
     * @return boolean
     */
    public function isSlugUnique($id, $slug)
    {   
        $exists = ImageGalleryProxy::modelClass()::where('id', '<>', $id)
            ->where('slug', $slug)
            ->limit(1)
            ->select(DB::raw(1))
            ->exists();

        return $exists ? false : true;
    }

    /**
     * Update created resources.
     * 
     * @param array $data
     * @param int $id
     * @return mixed
     */
    public function update(array $data, $id)
    {
        $category = $this->find($id);

        $value = $data;
        
        unset($data['image']);

        $category->update($data);

        $this->uploadImages($value, $category);

        return $category;
    }

    /**
     * Upload images
     * 
     * @param array $data
     * @param mixed $imageGallery
     * @return mixed
     */
    public function uploadImages($data, $imageGallery, $type = "image")
    {
        if (isset($data[$type])) {
            foreach ($data[$type]['files'] as $imageId => $file) {
                if ($file instanceof UploadedFile) {
                    if (Str::contains($file->getMimeType(), 'image')) {
                        $manager = new ImageManager();

                        $image = $manager->make($file)->encode('webp');

                        $path =  'image-gallery/' . $imageGallery->id . '/' . Str::random(40) . '.webp';

                        Storage::put($path, $image);

                        $imageGallery->image = $path;

                        $imageGallery->save();
                    }
                }
            }
        }
    }
}