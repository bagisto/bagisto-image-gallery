<?php

use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// Home > Gallery
Breadcrumbs::for('gallery', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push(trans('image-gallery::app.shop.image-gallery.gallery'), route('shop.image-gallery.index'));
});

// Home > Gallery > Gallery's Title
Breadcrumbs::for('images', function (BreadcrumbTrail $trail, $entity) {
    $trail->parent('gallery');
    $trail->push($entity->gallery_title ?? '', route('shop.image-gallery.image', $entity->id));
});
