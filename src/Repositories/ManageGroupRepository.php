<?php

namespace Webkul\ImageGallery\Repositories;

use Illuminate\Support\Facades\DB;
use Webkul\Core\Eloquent\Repository;
use Webkul\ImageGallery\Contracts\ManageGroup;
use Webkul\ImageGallery\Models\ManageGroupProxy;

class ManageGroupRepository extends Repository
{
    /**
     * Specify Model class name
     *
     * @return mixed
     */
    public function model()
    {
        return ManageGroup::class;
    }
    
    /**
     * Get Category Tree.
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
     * Get Category tree without descendent.
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
     * Check if slug is unique.
     * 
     * @return boolean
     */
    public function isSlugUnique($id, $slug)
    {   
        $exists = ManageGroupProxy::modelClass()::where('id', '<>', $id)
            ->where('slug', $slug)
            ->limit(1)
            ->select(DB::raw(1))
            ->exists();

        return $exists ? false : true;
    }
}