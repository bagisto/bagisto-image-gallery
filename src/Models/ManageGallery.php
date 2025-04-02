<?php

namespace Webkul\ImageGallery\Models;

use Illuminate\Database\Eloquent\Model;
use Webkul\ImageGallery\Contracts\ManageGallery as ManageGalleryContract;

class ManageGallery extends Model implements ManageGalleryContract
{
    /**
     * Fillable.
     *
     * @var array
     */
    protected $fillable = [
        'gallery_title',
        'gallery_code',
        'image_ids',
        'thumbnail_image_id',
        'status',
    ];
}
