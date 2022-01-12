@php
    $show_image = core()->getConfigData('image.image.image_options.image_gallery_show');
@endphp
@if($show_image)
<div class="container-fluid product-policy-container no padding">
    <div class="row">
        <div class="row col-12 remove-padding-margin">
            <div class="col-lg-3 col-sm-12 product-policy-wrapper">
                <div class="card">
                    <div class="page-action">
                        <a href="{{ route('imagegallery.shop.index') }}">
                            <button type="submit" class="btn btn-lg btn-primary">
                                {{ __('imagegallery::app.view.view_galleries') }}
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endif