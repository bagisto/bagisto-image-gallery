@extends('shop::layouts.master')

@section('page_title')
    {{ __('Images') }}
@endsection

@php
    $opening_effect = core()->getConfigData('image.image.image_options.opening_effect');
    $closing_effect = core()->getConfigData('image.image.image_options.closing_effect');
    $caption = core()->getConfigData('image.image.image_options.caption');
    $caption_type = core()->getConfigData('image.image.image_options.caption_type');
    $caption_position = core()->getConfigData('image.image.image_options.caption_position');
    $bg_effect = core()->getConfigData('image.image.image_options.background');
    $cyclic = core()->getConfigData('image.image.image_options.cyclic');
    $interval = core()->getConfigData('image.image.image_options.interval');
    $img_border = core()->getConfigData('image.image.image_options.border');
    $img_slide_count= core()->getConfigData('image.image.image_options.slidecount');
    $img_control = core()->getConfigData('image.image.image_options.controls');
@endphp

@push('css')
<link rel="stylesheet" href="{{ asset('themes/default/assets/css/default.css') }}" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
    header #search-form .btn-group{
        display: none;
    }
    .product-card{   
        border: 5px solid #d6d6d6;
        margin-left: 10px;
    }
    .main-container-wrapper .product-card{
        height: 280px;
    }
</style>
@endpush

@section('content-wrapper')
<h1 class="heading">{{ __('imagegallery::app.view.gallery') }}</h1>
<div class="product-grid-4">
@foreach ($categories as $key => $category)
    @foreach ($category->image_name as $key => $image)
        <div class="product-card">
            <div class="product-image">
            <span class="showImage" onclick="currentSlide({{$key+1}})">
                <img src="{{asset("storage/".$image->image) }}" title="{{$image->description}}" style="width: 224px; height: 215px;" />
            </span>
            </div>
        </div>
        
    @endforeach
@endforeach
</div>
<div class="slidercontainer {{$bg_effect}}" id="slidercontainer">

@foreach ($categories as $key => $category)

    @foreach ($category->image_name as $key => $image)
    
        <div class="slideindex">
            <div class="product-cards {{$img_border}}">
                <div class="product-images">
                    <img src="{{asset("storage/".$image->image) }}" title="{{$image->description}}" style="width: 100&; height: 100%;"/>
                </div>
                <div class="product-information {{$caption}} {{ $caption_type}} {{$caption_position}}">           
                    <div class="product-name" >
                        <span>
                        {{$image->description}}
                        </span>
                    </div>
                </div>
            </div>
            <span class="close" onclick="currentSlideClose()">&times;</span>            

            <i class='fas fa-chevron-circle-left btn' onclick="plusSlides(-1)"></i>
            <i class='fas fa-chevron-circle-right btn' onclick="plusSlides(1)"></i>

        </div>
        <ul id="menu" class="{{$img_control}}">              
            <li><a class="glyphicon iconstyle glyphicon-arrow-left" onclick="plusSlides(-1)"></a>
                <a class="fa fa-play iconstyle" id="play{{$key+1}}" onclick="playSlides({{$key+1}})"></a>
                <a class="glyphicon iconstyle glyphicon-arrow-right" onclick="plusSlides(1)"></a>
            </li>
            <li><a class="fa fa-compress iconstyle"></a></li>
            <li><a class="fa fa-close iconstyle" onclick="currentSlideClose()"></a></li>
        </ul>
    @endforeach
@endforeach

</div>


@endsection

@push('scripts')
<script>

var slideIndex = 1;

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function playSlides(n){
    var myButtonClasses = document.getElementById("play"+n).classList;
    
    if ( myButtonClasses ==  'fa fa-play iconstyle' )
    {
        var i;
        var slides = document.getElementsByClassName("slideindex");
        for (i = 1; i <= slides.length; i++) {
            
            $("#play"+i).removeClass('fa fa-play iconstyle');
            $("#play"+i).addClass('fa fa-stop iconstyle');
        }        
        play()
    }
    else if( myButtonClasses ==  'fa fa-stop iconstyle'){
        var i;
        var slides = document.getElementsByClassName("slideindex");
        for (i = 1; i <= slides.length; i++) {
            $("#play"+i).removeClass('fa fa-stop iconstyle');
            $("#play"+i).addClass('fa fa-play iconstyle');
        }
        stop()
    }
    
}

function currentSlideClose() {
    var i;
    var slides = document.getElementsByClassName("slideindex");
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
      document.getElementById("slidercontainer").style.display = "none";
    }
    if($("a").hasClass("fa-stop"))
    {
        var i;
        var slides = document.getElementsByClassName("slideindex");       
        
        for (i = 1; i <= slides.length; i++) {
            $("#play"+i).removeClass('fa fa-stop iconstyle');
            $("#play"+i).addClass('fa fa-play iconstyle');
        }
        stop()
    }
}

function currentSlide(n) {  
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("slideindex");
  
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }

  var myButtonClasses = event.target.className;
    
    if ( myButtonClasses ==  'glyphicon iconstyle glyphicon-arrow-left' || myButtonClasses== 'fas fa-chevron-circle-left btn' )
    {
        slides[slideIndex-1].style.animation = "mynewleftmove 0.8s";
    }
    else if ( myButtonClasses ==  'glyphicon iconstyle glyphicon-arrow-right' || myButtonClasses == 'fas fa-chevron-circle-right btn')
    {
        slides[slideIndex-1].style.animation = "mynewrightmove 0.8s";
    }
  
  slides[slideIndex-1].style.display = "block"; 
  document.getElementById("slidercontainer").style.display = "block";
 
}


function play() {
  var i;
  
  var slides = document.getElementsByClassName("slideindex");

  var intervals = "<?php echo $interval; ?>"
    intervals = parseInt(intervals);
    if(Number.isNaN(intervals))
    {

        intervals = 1000;
    }
    
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  
  
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.animation = "mynewrightmove 0.8s";
  slides[slideIndex-1].style.display = "block";
  slideIndex++;
  
  myVar = setTimeout(play, intervals); // Change image every 2 seconds
}

function stop(){
    clearTimeout(myVar);
}
</script>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>

@endpush