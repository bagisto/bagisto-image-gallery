<x-shop::layouts>
    <x-slot:title>
       @lang('image-gallery::app.shop.image-gallery.gallery')
    </x-slot>
    
    <div class="container mt-5 max-lg:px-[30px] max-sm:mt-[30px]">
        <div class="py-4">
            <x-shop::breadcrumbs name="gallery" />
        </div>

        <div class="flex justify-between">
            <h3 class="font-dmserif text-[30px] max-sm:text-[25px]">
                @lang('image-gallery::app.shop.image-gallery.gallery')
            </h3>
        </div>
    </div>

    {!! view_render_event('bagisto.shop.image.galleries.before') !!}

    <v-image-galleries>
        <x-image-gallery::shimmer.shop.gallery.cards count="12" />
    </v-image-galleries> 

    {!! view_render_event('bagisto.shop.image.galleries.after') !!}

    @pushOnce('scripts')
        <script type="text/x-template" id="v-image-galleries-template">
            <div class="container mt-5 max-lg:px-[30px] max-sm:mt-[30px]">
                <div class="flex max-lg:gap-5 md:mt-10">
                    <div class="mt-[30px]">
                        <div class="grid grid-cols-4 gap-8 max-1060:grid-cols-1 max-1060:ml-5 max-sm:justify-items-center max-sm:gap-4">
                            @if(count($manageGalleries))
                                @foreach ($manageGalleries  as $key1 => $category)
                                    <div class="relative grid w-full content-start gap-2.5">
                                        <div class="group relative max-h-[300px] max-w-[291px] overflow-hidden rounded">
                                            @php 
                                                $imageUrl = null;

                                                $imageId= '';

                                                $imageTitle = '';

                                                foreach ($category->image_name as $image) {
                                                    $imageId = $image->id;

                                                    $imageTitle = $image->title;
                                                        
                                                    if (
                                                        $category->thumbnail_image_id === $image->id
                                                    ) {
                                                        $imageUrl = asset("storage/". $image->image);
                                                    }
                                                }
                                            @endphp

                                            <a href="{{ route('shop.image-gallery.image', $category->id) }}">
                                                <x-shop::media.images.lazy
                                                    class="after:content-[' '] relative min-w-[250px] max-md:min-w-[100px] bg-zinc-100 transition-all duration-300 after:block after:pb-[calc(100%+9px)] group-hover:scale-105 border-2 box-shadow rounded-md"
                                                    src="{{ $imageUrl ?? bagisto_asset('images/small-product-placeholder.webp') }}"
                                                    width="291"
                                                    height="300"
                                                    style="height: 300px;"
                                                ></x-shop::media.images.lazy>
                                                    
                                                <div class="action-items bg-black">
                                                    <div class="opacity-0 transition-all duration-300 group-hover:bottom-0 group-hover:opacity-100">
                                                        <p class="text-navyBlue absolute bottom-[15px] left-[50%] w-max -translate-x-[50%] translate-y-[54px] cursor-pointer bg-white px-[43px] py-3 text-xs font-medium transition-all duration-300 group-hover:translate-y-0 rounded-md shadow-xl"> 
                                                            @lang('image-gallery::app.shop.image-gallery.view-gallery')
                                                        </p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                            
                                        <span class="bg-black bg-opacity-50 text-white text-center transition-all duration-300 py-2 group-hover:scale-105">{{ $category->gallery_title }} ({{ count($category->image_name) }})</span>
                                    </div>
                                @endforeach
                            @else
                                <div class="relative grid w-full content-start gap-2.5">
                                    <p class="text-xl text-gray-600 dark:text-gray-300">
                                        @lang('image-gallery::app.shop.image-gallery.no-gallery-found')
                                    </p>
                                </div> 
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </script>

        <script type="module">
            app.component('v-image-galleries', {
                template: '#v-image-galleries-template',

                data() {
                    return {
                    };
                },
            });
        </script>
    @endpushonce
</x-shop::layouts>