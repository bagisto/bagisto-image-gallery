@extends('shop::layouts.master')


@push('css')
<link rel="stylesheet" href="{{ asset('themes/default/assets/css/velocity.css') }}" />
<style>
    .product-card{
        border: 5px ridge;
        margin-left: 10px;
    }
    .product-information{
        text-align: center;
    }
</style>
@endpush

@section('content-wrapper')

<div><h3>
    <a href="{{ route('shop.home.index') }}" class="homelink">Home</a> &nbsp;>&nbsp;&nbsp; Image Gallery
</h3>
<div class="heading"><h1>Image Gallery</h1></div>
</div>

    
@foreach ($managegalleries as $key => $managegallery)
<div class="product-card">
    <div class="product-image">
        <a href="{{ route('imagegallery.shop.image',$managegallery->id) }}">
            <img src="storage/{{$managegallery->image_name[0]->image }}" style="width: 224px; height: 215px;" />
        </a>
    </div>   
    <div class="product-information">            
        <div class="product-name">
            <span>
                
                {{$managegallery->gallery_title}} ({{count($managegallery->image_name)}})
            </span>
        </div>
    </div>
</div>
@endforeach

@endsection