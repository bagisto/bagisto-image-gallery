<?php

namespace Webkul\ImageGallery\Models;

use Illuminate\Database\Eloquent\Model;
use Webkul\ImageGallery\Models\ImageGalleryProxy;
use Webkul\ImageGallery\Contracts\ImageGallery as ImageGalleryContract;
use Webkul\Core\Eloquent\TranslatableModel;
use Kalnoy\Nestedset\NodeTrait;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Webkul\ImageGallery\Repositories\ImageGalleryRepository;

class ImageGallery extends Model implements ImageGalleryContract
{
    protected $fillable = [
        'title',
        'description',
        'sort',
        'image_name',
        'status',
    ];
}

