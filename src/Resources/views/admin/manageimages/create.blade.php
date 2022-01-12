@extends('admin::layouts.content')

@section('page_title')
    {{ __('imagegallery::app.images.create.page_title') }}
@stop

@section('css')
    <style>
        .table td .label {
            margin-right: 10px;
        }
        .table td .label:last-child {
            margin-right: 0;
        }
        .table td .label .icon {
            vertical-align: middle;
            cursor: pointer;
        }
    </style>
@stop

@section('content')
    <div class="content">
        <form method="POST" action="" @submit.prevent="onSubmit" enctype="multipart/form-data">

            <div class="page-header">
                <div class="page-title">
                    <h1>
                        <i class="icon angle-left-icon back-link" onclick="history.length > 1 ? history.go(-1) : window.location = '{{ route('admin.dashboard.index') }}';"></i>
                        {{ __('imagegallery::app.images.create.page_title') }}
                    </h1>
                </div>

                <div class="page-action">
                    <button type="submit" class="btn btn-lg btn-primary">
                        {{ __('imagegallery::app.images.create.action') }}
                    </button>
                </div>
            </div>

            <div class="page-content">
                @csrf()

                <?php $familyId = request()->input('family') ?>
                {!! view_render_event('bagisto.imagegallery.manageimage.create_form_accordian.general.before') !!}


                <accordian :title="'{{ __('imagegallery::app.images.create.accordian_title') }}'" :active="true">
                    <div slot="body">
                    {!! view_render_event('bagisto.imagegallery.manageimage.create_form_accordian.general.controls.before') !!}
                        <div class="control-group" :class="[errors.has('title') ? 'has-error' : '']">
                            <label for="title" class="required">{{ __('imagegallery::app.images.create.title') }}</label>
                            <input type="text" v-validate="'required'" class="control" id="title" name="title" value="{{ old('title') }}" data-vv-as="&quot;{{ __('Image Title') }}&quot;" v-slugify-target="'slug'"/>
                            <div>{{ __('imagegallery::app.images.create.title_msg') }}</div>
                            <span class="control-error" v-if="errors.has('title')">@{{ errors.first('title') }}</span>
                        </div> 
                        <div class="control-group" :class="[errors.has('description') ? 'has-error' : '']">
                            <label for="" class="required">{{ __('imagegallery::app.images.create.description') }}</label>
                            <input type="text" v-validate="'required'" class="control" id="description" name="description" value="{{ old('description') }}" data-vv-as="&quot;{{ __('Description') }}&quot;" v-slugify-target="'slug'"/>
                            <span class="control-error" v-if="errors.has('description')">@{{ errors.first('description') }}</span>
                        </div>
                        <div class="control-group" :class="[errors.has('sort') ? 'has-error' : '']">
                            <label for="sort" class="required">{{ __('imagegallery::app.images.create.sort') }}</label>
                            <input type="text" v-validate="'required|numeric'" class="control" id="sort" name="sort" value="{{ old('sort') }}" data-vv-as="&quot;{{ __('Sort') }}&quot;" v-slugify-target="'slug'"/>
                            <span class="control-error" v-if="errors.has('sort')">@{{ errors.first('sort') }}</span>
                        </div>   
                        <div class="control-group {!! $errors->has('image.*') ? 'has-error' : '' !!}">
                            <label class="required">{{ __('imagegallery::app.images.create.image') }}</label>
                            <image-wrapper 
                            :button-label="'{{ __('imagegallery::app.images.create.btn_label') }}'" 
                                input-name="image" :multiple="false"></image-wrapper>
                            <span class="control-error" v-if="{!! $errors->has('image.*') !!}">
                                @foreach ($errors->get('image.*') as $key => $message)
                                    @php echo str_replace($key, 'Image', $message[0]); @endphp
                                @endforeach
                            </span>
                        </div>
                        <div class="control-group" :class="[errors.has('status') ? 'has-error' : '']">
                            <label for="status" class="required">{{ __('imagegallery::app.images.create.status') }}</label>
                            <select class="control" v-validate="'required'" id="status" name="status" data-vv-as="&quot;{{ __('Status') }}&quot;">
                                <option value="1">
                                    {{ __('imagegallery::app.images.create.enable') }}
                                </option>
                                <option value="0">
                                    {{ __('imagegallery::app.images.create.disable') }}
                                </option>
                            </select>
                            <span class="control-error" v-if="errors.has('status')">@{{ errors.first('status') }}</span>
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
@endpush