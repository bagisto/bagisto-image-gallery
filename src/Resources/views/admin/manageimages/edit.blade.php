@extends('admin::layouts.content')

@section('page_title')
    {{ __('imagegallery::app.images.edit.page_title') }}
@stop

@section('css')
<style>
    .imagegallery
{
    width: 100%;
    height: 100px;
}
</style>
@stop
@section('content')
    <div class="content">
        <?php $locale = request()->get('locale') ?: app()->getLocale(); ?>

        <form method="POST" action="" @submit.prevent="onSubmit" enctype="multipart/form-data">

            <div class="page-header">
                <div class="page-title">
                    <h1>
                        <i class="icon angle-left-icon back-link" onclick="history.length > 1 ? history.go(-1) : window.location = '{{ route('admin.dashboard.index') }}';"></i>

                        {{ __('imagegallery::app.images.edit.page_title') }}
                    </h1>

                    
                </div>

                <div class="page-action">
                    <button type="submit" class="btn btn-lg btn-primary">
                        {{ __('imagegallery::app.images.edit.action') }}
                    </button>
                </div>
            </div>

            <div class="page-content">
                <div class="form-container">
                    @csrf()
                    <input name="_method" type="hidden" value="PUT">

                    <accordian :title="'{{ __('imagegallery::app.images.edit.accordian_title') }}'" :active="true">
                        <div slot="body">

                            <div class="control-group" :class="[errors.has('title') ? 'has-error' : '']">
                                <label for="title" class="required">{{ __('imagegallery::app.images.edit.title') }}</label>
                                <input type="text" v-validate="'required'" class="control" id="title" name="title" value="{{ old('title') ?: $category->title }}" data-vv-as="&quot;{{ __('Image Title') }}&quot;"/>
                                <span class="control-error" v-if="errors.has('title')">@{{ errors.first('title') }}</span>
                            </div>

                            <div class="control-group" :class="[errors.has('description') ? 'has-error' : '']">
                                <label for="description" class="required">{{ __('imagegallery::app.images.edit.description') }}</label>
                                <input type="text" v-validate="'required'" class="control" id="description" name="description" value="{{ old('description') ?: $category->description }}" data-vv-as="&quot;{{ __('Description') }}&quot;"/>
                                <span class="control-error" v-if="errors.has('description')">@{{ errors.first('description') }}</span>
                            </div>

                            <div class="control-group" :class="[errors.has('sort') ? 'has-error' : '']">
                                <label for="sort" class="required">{{ __('imagegallery::app.images.edit.sort') }}</label>
                                <input type="text" v-validate="'required|numeric'" class="control" id="sort" name="sort" value="{{ old('sort') ?: $category->sort }}" data-vv-as="&quot;{{ __('Sort') }}&quot;"/>
                                <span class="control-error" v-if="errors.has('sort')">@{{ errors.first('sort') }}</span>
                            </div>

                            <div class="control-group {!! $errors->has('image.*') ? 'has-error' : '' !!}">
                                <label>{{ __('imagegallery::app.images.edit.image') }}</label>

                                <image-wrapper :button-label="'{{ __('imagegallery::app.images.edit.btn_label') }}'" 
                                input-name="image" :multiple="false"  
                                :images='"{{ asset("storage/$category->image") }}"'></image-wrapper>

                                <span class="control-error" v-if="{!! $errors->has('image.*') !!}">
                                    @foreach ($errors->get('image.*') as $key => $message)
                                        @php echo str_replace($key, 'Image', $message[0]); @endphp
                                    @endforeach
                                </span>
                            </div>

                            <div class="control-group" :class="[errors.has('status') ? 'has-error' : '']">
                                <label for="status" class="required">{{ __('imagegallery::app.images.edit.status') }}</label>
                                <select class="control" v-validate="'required'" id="status" name="status" data-vv-as="&quot;{{ __('Status') }}&quot;">
                                    <option value="1" {{ $category->status ? 'selected' : '' }}>
                                        {{ __('imagegallery::app.images.edit.enable') }}
                                    </option>
                                    <option value="0" {{ $category->status ? '' : 'selected' }}>
                                        {{ __('imagegallery::app.images.edit.disable') }}
                                    </option>
                                </select>
                                <span class="control-error" v-if="errors.has('status')">@{{ errors.first('status') }}</span>
                            </div>

                        </div>
                    </accordian>

                </div>
            </div>

        </form>
    </div>
@stop

@push('scripts')
    <script src="{{ asset('vendor/webkul/admin/assets/js/tinyMCE/tinymce.min.js') }}"></script>

    <script>
        $(document).ready(function () {
            tinymce.init({
                selector: 'textarea#description',
                height: 200,
                width: "100%",
                plugins: 'image imagetools media wordcount save fullscreen code table lists link hr',
                toolbar1: 'formatselect | bold italic strikethrough forecolor backcolor link hr | alignleft aligncenter alignright alignjustify | numlist bullist outdent indent  | removeformat | code | table',
                image_advtab: true
            });
        });

        Vue.component('description', {

            template: '#description-template',

            inject: ['$validator'],

            data: function() {
                return {
                    isRequired: true,
                }
            },

            created: function () {
                var this_this = this;

                $(document).ready(function () {
                    $('#display_mode').on('change', function (e) {
                        if ($('#display_mode').val() != 'products_only') {
                            this_this.isRequired = true;
                        } else {
                            this_this.isRequired = false;
                        }
                    })

                    if ($('#display_mode').val() != 'products_only') {
                        this_this.isRequired = true;
                    } else {
                        this_this.isRequired = false;
                    }
                });
            }
        })
    </script>
@endpush