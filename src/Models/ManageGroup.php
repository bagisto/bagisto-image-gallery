<?php

namespace Webkul\ImageGallery\Models;

use Illuminate\Database\Eloquent\Model;
use Webkul\ImageGallery\Models\ManageGroupProxy;
use Webkul\ImageGallery\Contracts\ManageGroup as ManageGroupContract;
use Webkul\Core\Eloquent\TranslatableModel;
use Kalnoy\Nestedset\NodeTrait;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Webkul\ImageGallery\Repositories\ManageGroupRepository;

class ManageGroup extends Model implements ManageGroupContract
{
    //
    protected $fillable = [
        'group_code',
        'gallery_ids',
        'status',
    ];
}
