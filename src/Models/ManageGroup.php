<?php

namespace Webkul\ImageGallery\Models;

use Illuminate\Database\Eloquent\Model;
use Webkul\ImageGallery\Contracts\ManageGroup as ManageGroupContract;

class ManageGroup extends Model implements ManageGroupContract
{
    /**
     * Fillable.
     *
     * @var array
     */
    protected $fillable = [
        'group_code',
        'gallery_ids',
        'status',
    ];
}