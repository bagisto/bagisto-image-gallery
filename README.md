# Introduction

Bagisto Image Gallery add-on allows the admin to add/manage images into various galleries and galleries into various groups according to requirements.
This is the best gallery add-on for the Bagisto platform and in this module, everything is configured by the admin. The admin can even allow the style for opening and closing the Image

It packs in lots of demanding features that allows your business to scale in no time:

- Admin can add Images , Images Title, Description text .
- Admin can add Gallery using Images text .
- Admin can add Group of Gallery .
- Admin can allow the style for opening and closing the Image.
- Admin can allow to show the title of image.
- Admin can decide also the position of title.
- User will able to see Galleries on Home Page.
- User can see all the Images while clicking on the Gallery
- For seeing any particular image user can click on any image and from there can also control the image to see next or previous image.


## Requirements:

- **Bagisto**: 1.3.1

## Installation :
- Run the following command
```
composer require bagisto/bagisto-image-gallery
```

- Goto config/concord.php file and add following line under 'modules'
```php
\Webkul\ImageGallery\Providers\ModuleServiceProvider::class
```

- Run these commands below to complete the setup
```
composer dump-autoload
```

```
php artisan migrate
php artisan route:cache
php artisan config:cache
```

```
php artisan vendor:publish --force
```
-> Press the number before "ImageGalleryServiceProvider" class and then press enter to publish all assets and configurations.

- Goto config/app.php file and set your 'default_country'

> That's it, now just execute the project on your specified domain.
