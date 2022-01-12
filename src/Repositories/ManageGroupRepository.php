<?php

namespace Webkul\ImageGallery\Repositories;

use Illuminate\Container\Container as App;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Event;
use Webkul\Core\Eloquent\Repository;
use Webkul\ImageGallery\Models\ManageGroup;
use Webkul\ImageGallery\Models\ManageGroupProxy;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\DB;

class ManageGroupRepository extends Repository
{
    /**
     * Specify Model class name
     *
     * @return mixed
     */
    public function model()
    {
        return 'Webkul\ImageGallery\Models\ManageGroup';
    }

    /**
     * @param  array  $data
     * @return \Webkul\Category\Contracts\Category
     */
    public function create(array $data)
    {
        $managegroup = $this->model->create($data);

        return $managegroup;
    }


    public function getCategoryTree($id = null)
    {
        return $id
               ? $this->model::orderBy('id', 'ASC')->where('id', '!=', $id)->get()
               : $this->model::orderBy('id', 'ASC')->get();
    }


    public function getCategoryTreeWithoutDescendant($id = null)
    {
        return $id
               ? $this->model::orderBy('id', 'ASC')->where('id', '!=', $id)->get()
               : $this->model::orderBy('id', 'ASC')->get();
    }


    public function isSlugUnique($id, $slug)
    {   
        $exists = ManageGroupProxy::modelClass()::where('id', '<>', $id)
            ->where('slug', $slug)
            ->limit(1)
            ->select(DB::raw(1))
            ->exists();

        return $exists ? false : true;
    }


    public function update(array $data, $id, $attribute = "id")
    {
        $category = $this->find($id);

        $category->update($data);

        return $category;
    }


    public function uploadImages($data, $managegroup, $type = "image")
    {
        if (isset($data[$type])) {
            $request = request();

            foreach ($data[$type] as $imageId => $image) {
                $file = $type . '.' . $imageId;
                $dir = 'managegroup/' . $managegroup->id;

                if ($request->hasFile($file)) {
                    if ($managegroup->{$type}) {
                        Storage::delete($managegroup->{$type});
                    }

                    $managegroup->{$type} = $request->file($file)->store($dir);
                    $managegroup->save();
                }
            }
        } else {
            if ($managegroup->{$type}) {
                Storage::delete($managegroup->{$type});
            }

            $managegroup->{$type} = null;
            $managegroup->save();
        }
    }

    // /**
    //  * @param  array|null  $columns
    //  * @return array
    //  */
    // public function getPartial($columns = null)
    // {
    //     $categories = $this->model->all();

    //     $trimmed = [];

    //     foreach ($categories as $key => $category) {
    //         if ($category->name != null || $category->name != "") {
    //             $trimmed[$key] = [
    //                 'id'   => $category->id,
    //                 'name' => $category->name,
    //                 'slug' => $category->slug,
    //             ];
    //         }
    //     }

    //     return $trimmed;
    // }
}