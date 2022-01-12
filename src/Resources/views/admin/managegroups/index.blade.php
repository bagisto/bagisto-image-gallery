@extends('admin::layouts.content')

@section('page_title')
    {{ __('imagegallery::app.manage_group.page_title') }}
@stop

@section('content')
    <div class="content" style="height: 100%;">
        <?php $locale = request()->get('locale') ?: null; ?>
        <?php $channel = request()->get('channel') ?: null; ?>
        <div class="page-header">
            <div class="page-title">
                <h1>{{ __('imagegallery::app.manage_group.page_title') }}</h1>
            </div>

            <div class="page-action">
                <a href="{{ route('imagegallery.admin.managegroups.create') }}" class="btn btn-lg btn-primary">
                    {{ __('imagegallery::app.manage_group.action') }}
                </a>
            </div>
        </div>


        <div class="page-content">
            @inject('products', '\Webkul\ImageGallery\DataGrids\ManageGroupDataGrid')
            {!! $products->render() !!}
        </div>


    </div>

    <modal id="downloadDataGrid" :is-open="modalIds.downloadDataGrid">
        <h3 slot="header">{{ __('Download') }}</h3>
        <div slot="body">
            <export-form></export-form>
        </div>
    </modal>
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