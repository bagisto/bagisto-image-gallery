@extends('admin::layouts.content')

@section('page_title')
    {{ __('imagegallery::app.manage_gallery.create.page_title') }}
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

    
        <form method="POST" action="" @submit.prevent="onSubmit" enctype="multipart/form-data" id="createform">

            <div class="page-header">
                <div class="page-title">
                    <h1>
                        <i class="icon angle-left-icon back-link" onclick="history.length > 1 ? history.go(-1) : window.location = '{{ route('admin.dashboard.index') }}';"></i>
                        {{ __('imagegallery::app.manage_gallery.create.page_title') }}
                    </h1>
                </div>

                <div class="page-action">
                    <button type="submit" class="btn btn-lg btn-primary">
                        {{ __('imagegallery::app.manage_gallery.create.action') }}
                    </button>
                </div>
            </div>

            <div class="page-content">
                @csrf()

                <?php $familyId = request()->input('family') ?>


                <accordian :title="'{{ __('imagegallery::app.manage_gallery.create.accordian_title') }}'" :active="true">
                    <div slot="body">
                        <div class="control-group" :class="[errors.has('gallery_title') ? 'has-error' : '']">
                            <label for="gallery_title" class="required">{{ __('imagegallery::app.manage_gallery.create.title') }}</label>
                            <input type="text" v-validate="'required'" class="control" id="gallery_title" name="gallery_title" value="{{ old('gallery_title') }}" data-vv-as="&quot;{{ __('Gallery Title') }}&quot;" v-slugify-target="'slug'"/>
                            <span class="control-error" v-if="errors.has('gallery_title')">@{{ errors.first('gallery_title') }}</span>
                        </div>
                        <div class="control-group" :class="[errors.has('gallery_code') ? 'has-error' : '']">
                            <label for="gallery_code" class="required">{{ __('imagegallery::app.manage_gallery.create.gallery_code') }}</label>
                            <input type="text" v-validate="'required'" class="control" id="gallery_code" name="gallery_code" value="{{ old('gallery_code') }}" data-vv-as="&quot;{{ __('Gallery Code') }}&quot;" v-slugify-target="'slug'"/>
                            <span class="control-error" v-if="errors.has('gallery_code')">@{{ errors.first('gallery_code') }}</span>
                        </div>
                        <div class="control-group" :class="[errors.has('status') ? 'has-error' : '']">
                            <label for="status" class="required">{{ __('imagegallery::app.manage_gallery.create.status') }}</label>
                            <select class="control" v-validate="'required'" id="status" name="status" data-vv-as="&quot;{{ __('Status') }}&quot;">
                                <option value="1">
                                    {{ __('imagegallery::app.manage_gallery.create.enable') }}
                                </option>
                                <option value="0">
                                    {{ __('imagegallery::app.manage_gallery.create.disable') }}
                                </option>
                            </select>
                            <span class="control-error" v-if="errors.has('status')">@{{ errors.first('status') }}</span>
                        </div>

                        <div class="control-group">
                            <input type="text" name="extradata" class="extradata" id="extradata" hidden="hidden">
                            <input type="text" name="thumb" class="thumb" id="thumb" hidden="hidden">
                        </div>
                        
                    </div>
                </accordian>
                <accordian :title="'{{ __('imagegallery::app.manage_gallery.create.gallery_image') }}'" :active="true">
                    <div slot="body">

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
                                    @foreach( $imageGalleries as $key =>  $imageGallery)
                                        <tr>
                                            <td data-value="Id">
                                                <span>
                                                    <input type="checkbox" name="image_ids[]" value="{{$imageGallery->id}}" class="gridcheckbox"  >
                                                    
                                                </span>
                                            </td>
                                            <td data-value="Thumbnail">
                                                <span>
                                                    <input type="radio" name="thumbnail_image_id" value="{{$imageGallery->id}}" class="gridradio">
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
        </form>
    </div>
@stop



@push('scripts')
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

    <script>
        $(document).ready(function () {
            
            $('.gridcheckbox').on('click', function(e) {
                var imgid = $(this).val()
                var imgids = $('.extradata').val()     
                
                var answer = imgids.concat(imgid , ',')
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