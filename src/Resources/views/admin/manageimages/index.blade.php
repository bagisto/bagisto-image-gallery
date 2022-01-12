@extends('admin::layouts.content')

@section('page_title')
    {{ __('imagegallery::app.images.page-title') }}
@stop

@section('css')
<style>
    .imagegallery
{
    width: 70px;
    height: 30px;
}
</style>
@stop

@section('content')
    <div class="content" style="height: 100%;">
        <?php $locale = request()->get('locale') ?: null; ?>
        <?php $channel = request()->get('channel') ?: null; ?>
        <div class="page-header">
            <div class="page-title">
                <h1>{{ __('imagegallery::app.images.page-title') }}</h1>
            </div>

            <div class="page-action">
                

                <a href="{{ route('imagegallery.admin.manageimages.create') }}" class="btn btn-lg btn-primary">
                    {{ __('imagegallery::app.images.action') }}
                </a>
            </div>
        </div>

        <div class="page-content">
        
            @inject('products', '\Webkul\ImageGallery\DataGrids\ImageGalleryDataGrid')
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