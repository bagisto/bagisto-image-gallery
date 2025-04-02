@if (Request::segment(1) != config('app.admin_url'))
@bagistoVite(['src/Resources/assets/css/shop.css'], 'image-gallery')
@else
@bagistoVite(['src/Resources/assets/css/app.css'], 'image-gallery')
@endif