@extends('shop::layouts.master')


@push('css')

<style>
    .slidercontainer{
        width: 20rem;
    height: 385px;
    display: inline-block;
    }
    .product-card{
        border: 5px solid #dedede;
        margin-left: 10px;
    }
    .product-information{
        text-align: center;
    }
</style>
@endpush
 


@section('content-wrapper')

<div>
    <h3>
        <a href="{{ route('shop.home.index') }}" class="homelink">
            {{ __('imagegallery::app.view.home') }}
        </a>
        &nbsp;>&nbsp;&nbsp;
        {{ __('imagegallery::app.view.image_gallery') }}
    </h3>
    <div class="heading">
        <h3>{{ __('imagegallery::app.view.image_gallery') }}</h3>
    </div>
</div>

<?php
$cou = 0;
?>
@foreach ($managegalleries as $key1 => $category)

<div class="slidercontainer">
    @foreach ($category->image_name as $key2 => $image)
    
    <div class="slideindex slideindex{{$cou}} fades">
        <div class="product-card">
            <div class="product-image">
                <a href="{{ route('imagegallery.shop.image',$category->id) }}">
                    <img src="{{asset("storage/".$image->image) }}" style="width: 224px; height: 215px;" />
                </a>
            </div>
            <div class="product-information">           
                <div class="product-name">
                    <span>
                        {{$category->gallery_title}} ({{count($category->image_name)}})
                    </span>
                </div>
            </div>
        </div>
    </div>
        
    @endforeach
</div>
<?php
    $cou++;
?>
@endforeach

@endsection

@push('scripts')

<script>

var slideIndex = [];
indexSlides();

    function indexSlides() {
        var loops = document.getElementsByClassName("slidercontainer");
        var num;
        for(num = 0; num < loops.length; num++)
        {
            slideIndex[num] = 0;   
        }
    }

showSlides();
    
    function showSlides() {
        var i;
        var loops = document.getElementsByClassName("slidercontainer");
        var num;

        for(num = 0; num < loops.length; num++)
        {
            var name = "slideindex"+num;
            var slides = document.getElementsByClassName(name);
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex[num]++;
            if (slideIndex[num] > slides.length) {slideIndex[num] = 1}
            slides[slideIndex[num]-1].style.display = "block";
        }
        setTimeout(showSlides, 2000);
    }
</script>

@endpush