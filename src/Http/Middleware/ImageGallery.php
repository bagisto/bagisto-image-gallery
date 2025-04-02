<?php

namespace Webkul\ImageGallery\Http\Middleware;

use Closure;

class ImageGallery
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        abort_if(! core()->getConfigData('image.setting.image-options.status'), 404);

        return $next($request);
    }
}