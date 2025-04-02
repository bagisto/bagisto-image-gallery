<?php

namespace Webkul\ImageGallery\Models;

use Illuminate\Database\Eloquent\Model;
use Webkul\ImageGallery\Contracts\ImageGallery as ImageGalleryContract;

class ImageGallery extends Model implements ImageGalleryContract
{   
    /**
     * Fillable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'description',
        'sort',
        'image',
        'status',
    ];
}