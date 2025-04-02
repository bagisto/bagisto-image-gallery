<x-shop::layouts>
    <x-slot:title>
        @lang('image-gallery::app.shop.image-gallery.images')
    </x-slot>

    @php
        $caption = core()->getConfigData('image.setting.image-options.caption');

        $captionType = core()->getConfigData('image.setting.image-options.caption-type');

        $captionPosition = core()->getConfigData('image.setting.image-options.caption-position');

        $interval = core()->getConfigData('image.setting.image-options.interval');

        $imgBorder = core()->getConfigData('image.setting.image-options.border');

        $imgSlideCount= core()->getConfigData('image.setting.image-options.slide-count');   

        $imgControl = core()->getConfigData('image.setting.image-options.controls');

        $bgEffect = core()->getConfigData('image.setting.image-options.background');
    @endphp

    <div class="container mt-5 max-lg:px-[30px] max-sm:mt-[30px]">
        <div class="py-4">
            <x-shop::breadcrumbs
                name="images"
                :entity="$gallery"
            />
        </div>

        <div class="flex justify-between">
            <h3 class="font-dmserif text-[30px] max-sm:text-[25px]">
                {{ $gallery->gallery_title }} @lang('image-gallery::app.shop.image-gallery.images') 
            </h3>
            <p>{{ count($images) }} @lang('image-gallery::app.shop.image-gallery.images')</p>
        </div>
    </div>
    
    {!! view_render_event('bagisto.shop.image.card.before') !!}
    
    <v-image-card>
        <x-image-gallery::shimmer.shop.gallery.cards count="12" />
    </v-image-card>

    {!! view_render_event('bagisto.shop.image.card.after') !!}

    @pushOnce('scripts')
        <script type="text/x-template" id="v-image-card-template">
            <div class="container mt-5 max-lg:px-[30px] max-sm:mt-[30px]">
                <div class="flex max-lg:gap-5 md:mt-10">
                    <div class="mt-[30px]">
                        <div 
                            class="grid grid-cols-4 gap-8 max-1060:grid-cols-1 max-1060:ml-5 max-sm:justify-items-center max-sm:gap-4" 
                            v-if="images?.length"
                        >
                            <x-image-gallery::modal 
                                ref="imageModal"
                                v-for="(image,key) in images"
                            >
                                <!-- Modal Toggler -->
                                <x-slot:toggle>
                                    <span class="cursor-pointer">
                                        <div class="relative grid w-full min-w-[291px] content-start gap-2.5">
                                            <div class="group relative max-h-[300px] min-h-[300px] max-w-[291px] rounded">
                                                <x-shop::media.images.lazy
                                                    class="after:content-[' '] relative min-w-[250px] bg-zinc-100 transition-all duration-300 after:block after:pb-[calc(100%+9px)] group-hover:scale-105 border-2 box-shadow rounded-md"
                                                    ::src="image.image"
                                                    ::key="image.id"
                                                    ::index="image.id"
                                                    width="291" 
                                                    height="300"
                                                    ::alt="image.title"
                                                    @click="navigate(key)"
                                                    style="height: 300px;"
                                                ></x-shop::media.images.lazy>

                                                <span class="absolute bottom-0.5 w-[99%] rounded-md mx-auto left-0 right-0 bg-black bg-opacity-50 text-white text-center transition-all duration-300 py-1.5 group-hover:scale-105" v-text="image.title"></span>
                                            </div>
                                        </div>
                                    </span>
                                </x-slot:toggle>

                                <x-slot:content>
                                    @if ($imgSlideCount == 'Yes')
                                        <div class="{{ $bgEffect == 'Dark' ? 'text-white' : '' }} flex justify-center">
                                            @{{ currentIndex + 1 }} / @{{ images.length }}
                                        </div>
                                    @endif

                                    <div class="relative min-w-[200px] max-md:w-[100%]bg-white">
                                        <span
                                            ref="slides"
                                            :key="index"
                                            aria-label="Image Slide"
                                        >
                                            @if (
                                                $caption == 'Yes'
                                                && $captionPosition == "Top"
                                                && $captionType == "Outside"
                                            )
                                                <!-- inside the image / top-->
                                                <div class="my-3">
                                                    <span class="text-white bg-black bg-opacity-50 py-1 px-2 rounded text-base" v-text="selectedImageTitle"></span>
                                                </div>
                                            @endif
                                                
                                            <div>  
                                                <x-shop::media.images.lazy
                                                    class="h-[90%] object-fill w-[50%] m-auto max-md:w-[90%] max-md:h-[90%] mt-4 {{ $imgBorder == 'Yes' ? 'border-gray-400 border-2 rounded-md' : ''  }}"
                                                    ::src="selectedImageUrl"
                                                    ::key="currentIndex"
                                                    width="800"
                                                    height="300"
                                                    alt=""
                                                    style="max-height: 650px;"
                                                ></x-shop::media.images.lazy>

                                                @if ( 
                                                    $caption == 'Yes'
                                                    && $captionPosition == "Top"
                                                    && $captionType == "Inside"
                                                )
                                                    <!-- inside the image / top-->
                                                    <span class="absolute text-white bg-black bg-opacity-50 py-1 px-2 rounded text-base left-1/2 top-5 transform -translate-x-1/2" v-text="selectedImageTitle"></span>
                                                @endif

                                                <span
                                                    class="icon-arrow-left absolute left-2.5 top-1/2 -mt-[22px] w-auto cursor-pointer rounded-full bg-[rgba(0,0,0,0.8)] p-3 text-2xl font-bold text-white opacity-30 transition-all hover:opacity-100 {{ $imgControl == 'No' ? 'hidden' : ''}}"
                                                    v-if="images?.length >= 2"
                                                    @click="swipeLeft(currentIndex -= 1)"
                                                >
                                                </span>

                                                <span
                                                    class="icon-arrow-right absolute right-2.5 top-1/2 -mt-[22px] w-auto cursor-pointer rounded-full bg-[rgba(0,0,0,0.8)] p-3 text-2xl font-bold text-white opacity-30 transition-all hover:opacity-100 {{ $imgControl == 'No' ? 'hidden' : ''}}"
                                                    v-if="images?.length >= 2"
                                                    @click="swipeRight(currentIndex += 1)"
                                                >
                                                </span>

                                                @if ( 
                                                    $caption
                                                    && $captionPosition == "Bottom"
                                                    && $captionType == "Over"
                                                )
                                                    <!-- inside the image / bottom-->
                                                    <div class="my-2">
                                                        <span class="absolute text-white bg-black bg-opacity-50 py-1 px-2 rounded text-base left-1/2 bottom-5 transform -translate-x-1/2" v-text="selectedImageTitle"></span>       
                                                    </div>
                                                @endif
                                            </div>
                                            
                                            @if ( 
                                                $caption
                                                && $captionPosition == "Bottom"
                                                && $captionType == "Float"
                                            )
                                                <!-- outside the image / bottom-->
                                                <div class="my-2">
                                                    <span class="text-white bg-black bg-opacity-50 py-1 px-2 rounded text-base" v-text="selectedImageTitle"></span>       
                                                </div>
                                            @endif
                                        </span>
                                    </div>
                                </x-slot:content>
                            </x-image-gallery::modal>
                        </div>

                        <div   
                            class="flex items-center justify-between"
                            v-else
                        >
                            <p class="text-xl justify-center text-gray-600 dark:text-gray-300">
                                @lang('image-gallery::app.shop.image-gallery.no-image-found')
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </script>

        <script type="module">
            app.component('v-image-card', {
                template: '#v-image-card-template',

                data() {
                    return {
                        offset: 323,

                        images:@json($images ?? []),

                        selectedImageUrl: '',

                        selectedImageTitle: '',

                        isImageModelOpen: false,
                    
                        currentIndex:0,

                        interval: @json($interval),
                    };
                },

                mounted() {
                    this.play();
                },

                methods: {
                    swipeLeft(index) {
                        if (index == this.images.length) {
                            this.currentIndex = 0;
                        } else {
                            this.currentIndex = Math.abs(index);
                        }

                        this.selectedImageUrl = this.images[this.currentIndex].image;

                        this.selectedImageTitle = this.images[this.currentIndex].title;
                    },

                    swipeRight(index) {
                        if (index == this.images.length) {
                            this.currentIndex = 0;
                        } else {
                            this.currentIndex = index;
                        }

                        this.selectedImageUrl = this.images[this.currentIndex].image;

                        this.selectedImageTitle = this.images[this.currentIndex].title;
                    },

                    navigate(index) {
                        this.currentIndex = index;

                        this.selectedImageUrl = this.images[this.currentIndex].image;

                        this.selectedImageTitle = this.images[this.currentIndex].title;
                        
                        this.isImageModelOpen = true;
                    },

                    play() {
                        let self = this;
                        
                        if (this.interval.length) {
                            setInterval(() => {
                                if (this.currentIndex >= this.images.length - 1) {
                                    this.currentIndex = -1;
                                }

                                this.navigate(this.currentIndex += 1);
                            }, this.interval);
                        }
                    }
                },
            });
        </script>
    @endpushonce
</x-shop::layouts>