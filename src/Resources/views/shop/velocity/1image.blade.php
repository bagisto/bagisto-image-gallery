@extends('shop::layouts.master')

@section('page_title')
    {{ __('Images') }}
@endsection

@push('css')
<link rel="stylesheet" href="{{ asset('themes/default/assets/css/velocity.css') }}" />
<style>
    .product-card{
        border: 10px ridge;
        margin-left: 10px;
    }

</style>
@endpush

@section('content-wrapper')
<h1 class="heading">Gallery</h1>

@foreach ($categories as $key => $category)
    @foreach ($category->image_name as $key => $image)
        <div class="product-card">
            <div class="product-image">
            <span class="showImage" onclick="currentSlide({{$key+1}})">
                <img src="{{asset("storage/".$image->image) }}" style="width: 224px; height: 215px;" />
            </span>
            </div>
        </div>
    @endforeach
@endforeach

<div class="slidercontainer">

@foreach ($categories as $key => $category)
    @foreach ($category->image_name as $key => $image)
        <div class="slideindex fades">
            <div class="product-cards">
                <div class="product-images">
                    <img src="{{asset("storage/".$image->image) }}"/>
                </div>
                <div class="product-information">           
                    <div class="product-name">
                        <span>
                            {{$image->title}}
                        </span>
                    </div>
                </div>
            </div>
            <span class="close" onclick="currentSlideClose()">&times;</span>

            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>

            <div class="imgcontroller">
                <a class="glyphicon iconstyle glyphicon-arrow-left" onclick="plusSlides(-1)"></a>
                <a class="fa fa-play iconstyle" onclick="playSlides()"></a>
                <a class="glyphicon iconstyle glyphicon-arrow-right" onclick="plusSlides(1)"></a>
                <a class="fa fa-compress iconstyle"></a>
                <a class="fa fa-close iconstyle" onclick="currentSlideClose()"></a>
            </div>
        </div>
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

function currentSlideClose() {
    var i;
    var slides = document.getElementsByClassName("slideindex");
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
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
  
  slides[slideIndex-1].style.display = "block";  
}
</script>

@endpush