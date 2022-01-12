@extends('admin::layouts.content')

@section('page_title')
    {{ __('imagegallery::app.manage_gallery.edit.page_title') }}
@stop

@section('css')
<style>
    .imagegallery
{
    width: 100px;
    height: 100px;
}
#datagrid-filters.datagrid-filters
{
    display: none;
}
</style>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">

@stop

@section('content')
    <div class="content">

        <form method="POST" action="" @submit.prevent="onSubmit" enctype="multipart/form-data">

            <div class="page-header">
                <div class="page-title">
                    <h1>
                        <i class="icon angle-left-icon back-link" onclick="history.length > 1 ? history.go(-1) : window.location = '{{ route('admin.dashboard.index') }}';"></i>

                        {{ __('imagegallery::app.manage_gallery.edit.page_title') }}
                    </h1>
                </div>

                <div class="page-action">
                    <button type="submit" class="btn btn-lg btn-primary">
                        {{ __('imagegallery::app.manage_gallery.edit.action') }}
                    </button>
                </div>
            </div>

            <div class="page-content">
                <div class="form-container">
                    @csrf()
                    <input name="_method" type="hidden" value="PUT">

                    <accordian :title="'{{ __('imagegallery::app.manage_gallery.edit.accordian_title') }}'" :active="true">
                        <div slot="body">

                            <div class="control-group" :class="[errors.has('gallery_title') ? 'has-error' : '']">
                                <label for="gallery_title" class="required">{{ __('imagegallery::app.manage_gallery.edit.title') }}</label>
                                <input type="text" v-validate="'required'" class="control" id="gallery_title" name="gallery_title" value="{{ old('gallery_title') ?: $category->gallery_title }}" data-vv-as="&quot;{{ __('Gallery Title') }}&quot;" v-slugify-target="'slug'"/>
                                <span class="control-error" v-if="errors.has('gallery_title')">@{{ errors.first('gallery_title') }}</span>
                            </div>

                            <div class="control-group" :class="[errors.has('gallery_code') ? 'has-error' : '']">
                                <label for="gallery_code" class="required">{{ __('imagegallery::app.manage_gallery.edit.gallery_code') }}</label>
                                <input type="text" v-validate="'required'" class="control" id="gallery_code" name="gallery_code" value="{{ old('gallery_code') ?: $category->gallery_code }}" data-vv-as="&quot;{{ __('Gallery Code') }}&quot;" v-slugify-target="'slug'"/>
                                <span class="control-error" v-if="errors.has('gallery_code')">@{{ errors.first('gallery_code') }}</span>
                            </div>

                            <div class="control-group" :class="[errors.has('status') ? 'has-error' : '']">
                                <label for="status" class="required">{{ __('imagegallery::app.manage_gallery.edit.status') }}</label>
                                <select class="control" v-validate="'required'" id="status" name="status" data-vv-as="&quot;{{ __('Status') }}&quot;">
                                    <option value="1" {{ $category->status ? 'selected' : '' }}>
                                        {{ __('imagegallery::app.manage_gallery.edit.enable') }}
                                    </option>
                                    <option value="0" {{ $category->status ? '' : 'selected' }}>
                                        {{ __('imagegallery::app.manage_gallery.edit.disable') }}
                                    </option>
                                </select>
                                <span class="control-error" v-if="errors.has('status')">@{{ errors.first('status') }}</span>
                            </div>

                            <div class="control-group">
                                <input type="text" name="extradata" class="extradata" id="extradata" value='{{$category->image_ids}}' hidden="hidden">
                                <input type="text" name="thumb" class="thumb" id="thumb" value='{{$category->thumbnail_image_id}}' hidden="hidden">
                            </div>
                        </div>
                    </accordian>

                    <accordian :title="'{{ __('imagegallery::app.manage_gallery.edit.gallery_image') }}'" :active="true">
                        <div slot="body">
                            <?php 
                                $img_id=$category->image_ids;
                                $img_idradio = (int)($category->thumbnail_image_id);
                            ?>

                            <div class="control-group">
                                <table class="table" id="myTable">
                                    <thead>
                                        <tr style="height:65px;">
                                            <th class="grid_head">Id</th>
                                            <th class="grid_head">Thumbnail</th>
                                            <th class="grid_head">Image</th>
                                            <th class="grid_head">Image Title</th>
                                            <th class="grid_head">Description</th>
                                        </tr>
                                    </thead>

                                    <tbody  style="text-align:center">
                                        
                                        @foreach( $categories as $key =>  $imageGallery)
                                        
                                            <tr>
                                                <td data-value="Id">
                                                    <span>
                                                        <input type="checkbox" name="image_ids[]" value="{{$imageGallery->id}}" class="gridcheckbox" 
                                                        {{ in_array($imageGallery->id, explode(',', $category->image_ids)) ? 'checked' : ''}} >
                                                    </span>
                                                </td>
                                                <td data-value="Thumbnail">
                                                    <span>
                                                        <input type="radio" name="thumbnail_image_id" value="{{$imageGallery->id}}" class="gridradio"
                                                        {{ in_array($imageGallery->id, explode(',', $img_idradio)) ? 'checked' : ''}}>
                                                    </span>
                                                </td>
                                                <td data-value="Image">
                                                    <img src="{{ asset("storage/".$imageGallery->image) }}" class="imagegallery">
                                                </td>
                                                <td data-value="Image Title">
                                                    {{$imageGallery->title}}
                                                </td>
                                                <td data-value="Description">
                                                    {{$imageGallery->description}}
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>                                
                            </div>
                        </div>
                    </accordian> 
                </div>
            </div>

        </form>
    </div>
@stop

@push('scripts')

<script>
        $(document).ready(function () {
            
            $('.gridcheckbox').on('click', function(e) {
                var imgid = $(this).val()
                var imgids = $('.extradata').val()     
                
                var answer = imgids.concat(',',imgid)
                $('.extradata').val(answer)

            })
                
            $('.gridradio').on('click', function(e) {
                var value = $(this).val()
                $('.thumb').val(value)
            })
        });
    </script>

<script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>

<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js">
</script>

<script>
$(document).ready( function () {
    $('#myTable').DataTable(
        {
            "ordering": false
        }
    );
} );
</script>
@endpush