@extends('admin::layouts.content')

@section('page_title')
    {{ __('imagegallery::app.manage_gallery.page-title') }}
@stop

@section('content')
    <div class="content" style="height: 100%;">
        <?php $locale = request()->get('locale') ?: null; ?>
        <?php $channel = request()->get('channel') ?: null; ?>
        <div class="page-header">
            <div class="page-title">
                <h1>{{ __('imagegallery::app.manage_gallery.page-title') }}</h1>
            </div>

            <div class="page-action">
                <a href="{{ route('imagegallery.admin.managegallery.create') }}" class="btn btn-lg btn-primary">
                    {{ __('imagegallery::app.manage_gallery.action') }}
                </a>
            </div>
        </div>


        <div class="page-content">
            @inject('products', '\Webkul\ImageGallery\DataGrids\ManageGalleryDataGrid')
            {!! $products->render() !!}
        </div>

    </div>
@stop

@push('scripts')
    @include('admin::export.export', ['gridName' => $products])
    <script>
        function reloadPage(getVar, getVal) {
            let url = new URL(window.location.href);
            url.searchParams.set(getVar, getVal);
            window.location.href = url.href;
        }
    </script>
@endpush