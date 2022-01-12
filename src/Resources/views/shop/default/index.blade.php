@extends('shop::layouts.master')
@section('page_title')
    {{ __('Image Gallery') }}
@endsection

@push('css')
<link rel="stylesheet" href="{{ asset('themes/default/assets/css/default.css') }}" />
@endpush

@section('content-wrapper')
<div class="content">
    <h3>
        <a href="{{ route('shop.home.index') }}" class="homelink">
            {{ __('imagegallery::app.view.home') }}
        </a> 
        &nbsp;>&nbsp;&nbsp; 
        {{ __('imagegallery::app.view.image_gallery') }}
    </h3>
    <br>
    <h1 class="heading">
        {{ __('imagegallery::app.view.image_gallery') }}
    </h1>
@foreach ($managegalleries as $key => $managegallery)
    <div class="imagespan ">
        <div class="imagediv">
    
        <a href="{{ route('imagegallery.shop.image',$managegallery->id) }}">
        <div class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="item active">
                <img src="storage/{{$managegallery->image_name[0]->image }}" class=".imagegalleries" alt="{{$managegallery->image_name[0]->title }}" style="height: 200px;">
            </div>
        @for ($i=1; $i< $managegallery->counts; $i++)
            <div class="item">
                <img src="storage/{{$managegallery->image_name[$i]->image }}" class="imagegalleries" alt="{{$managegallery->image_name[$i]->title }}" style="height: 200px;"/>
            </div>
        @endfor
        </div>
        </div>
        </a>
        </div>
        {{$managegallery->counts}}
    <p class="imagetitle">{{$managegallery->gallery_title}} ({{count($managegallery->image_name)}})</p>
    </div>  
@endforeach

</div> 

@endsection

@push('scripts')

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>



<script>




        $(document).ready(function () {
            $('.label .cross-icon').on('click', function(e) {
                $(e.target).parent().remove();
            })

            $('.actions .trash-icon').on('click', function(e) {
                $(e.target).parents('tr').remove();
            })
        });
</script>

@endpush