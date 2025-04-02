<?php

namespace Webkul\ImageGallery\Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Http\File;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class GallerySeeder extends Seeder
{
    /**
     * Base path for the images.
     */
    const BASE_PATH = 'packages/Webkul/ImageGallery/src/Resources/assets/images/seeders/theme/';

    /**
     * Run the database seeds.
     * 
     * @param  array  $parameters
     */
    public function run(): void
    {
        $imageGallery = DB::table('theme_customizations')
            ->where('name', '=', 'Image Gallery')
            ->first();

        if (! $imageGallery) {
            DB::table('theme_customizations')->insert([
                [
                    'type'       => 'static_content',
                    'name'       => 'Image Gallery',
                    'sort_order' => 7,
                    'status'     => 1,
                    'channel_id' => 1,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
            ]);
        }

        $locales = DB::table('locales')->select('locales.code')->get();

        if ($imageGallery) {
            foreach ($locales as $locale) {
                $locale = $locale->code;

                DB::table('theme_customization_translations')   
                    ->insert([
                        [
                            'theme_customization_id' => $imageGallery->id,
                            'locale'                 => $locale,
                            'options'                => json_encode([
                                'html' => '<div class="section-gap bold-collections container"><div class="inline-col-wrapper"> <div class="inline-col-image-wrapper"> <img src="" data-src="'.$this->storeFileIfExists('theme/'.$imageGallery->id, 'static/'.$locale.'/image-gallery.webp', 'static/en/image-gallery.webp').'" class="lazy" width="632" height="510" alt="'.trans('image-gallery::app.shop.components.categories.gallery-heading', [], $locale).'"> </div> <div class="inline-col-content-wrapper"> <h2 class="inline-col-title"> '.trans('image-gallery::app.shop.components.categories.gallery-heading', [], $locale).' </h2> <p class="inline-col-description">'.trans('image-gallery::app.shop.components.categories.gallery-description', [], $locale).'</p> <button class="primary-button max-md:rounded-lg max-md:px-4 max-md:py-2.5 max-md:text-sm"><a href="gallery">'.trans('image-gallery::app.shop.components.categories.view-gallery', [], $locale).'</a></button> </div> </div> </div>',
    
                                'css'  => '.section-gap{margin-top:80px}.direction-ltr{direction:ltr}.direction-rtl{direction:rtl}.inline-col-wrapper{display:grid;grid-template-columns:auto 1fr;grid-gap:60px;align-items:center}.inline-col-wrapper .inline-col-image-wrapper{overflow:hidden}.inline-col-wrapper .inline-col-image-wrapper img{max-width:100%;height:auto;border-radius:16px;text-indent:-9999px}.inline-col-wrapper .inline-col-content-wrapper{display:flex;flex-wrap:wrap;gap:20px;max-width:464px}.inline-col-wrapper .inline-col-content-wrapper .inline-col-title{max-width:442px;font-size:60px;font-weight:400;color:#060c3b;line-height:70px;font-family:DM Serif Display;margin:0}.inline-col-wrapper .inline-col-content-wrapper .inline-col-description{margin:0;font-size:18px;color:#6e6e6e;font-family:Poppins}@media (max-width:991px){.inline-col-wrapper{grid-template-columns:1fr;grid-gap:16px}.inline-col-wrapper .inline-col-content-wrapper{gap:10px}} @media (max-width:768px){.inline-col-wrapper .inline-col-image-wrapper img {width:100%;} .inline-col-wrapper .inline-col-content-wrapper .inline-col-title{font-size:28px !important;line-height:normal !important}} @media (max-width:525px){.inline-col-wrapper .inline-col-content-wrapper .inline-col-title{font-size:20px !important;} .inline-col-description{font-size:16px} .inline-col-wrapper{grid-gap:10px}}',
                            ]),
                        ],
                ]);
            }
        }
    }

    /**
     * Store image in storage.
     *
     * @return void
     */
    public function storeFileIfExists($targetPath, $file, $default = null)
    {
        if (file_exists(base_path(self::BASE_PATH.$file))) {
            return 'storage/'.Storage::putFile($targetPath, new File(base_path(self::BASE_PATH.$file)));
        }

        if (! $default) {
            return;
        }

        if (file_exists(base_path(self::BASE_PATH.$default))) {
            return 'storage/'.Storage::putFile($targetPath, new File(base_path(self::BASE_PATH.$default)));
        }
    }
}