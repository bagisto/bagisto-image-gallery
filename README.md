# Introduction

Bagisto Image Gallery Extension will convert your Bagisto store into a multi vendor marketplace with separate seller product collection, order management, feedback support ratings and commissions.

It packs in lots of demanding features that allows your business to scale in no time:

# Features

* Admin can add Images , Images Title, Description text .

* Admin can add Gallery using Images text .

* Admin can add Group of Gallery .

* Admin can allow the style for opening and closing the Image.

* Admin can allow to show the title of image.

* Admin can decide also the position of title.

* User will able to see Galleries on Home Page.

* User can see all the Images while clicking on the Gallery

* For seeing any particular image user can click on any image and from there can also control the image to see next or previous image .


## Requirements:

- **Bagisto**: v2.2.2

## Installation :
- Run the following command
```
composer require bagisto/bagisto-image-gallery
```

- Run these commands below to complete the setup
```
composer dump-autoload
```

```
php artisan image-gallery:install
```

```
php artisan db:seed --class=Webkul\\ImageGallery\\Database\\Seeders\\GallerySeeder
```

```
php artisan optimize:clear
```

> That's it, now just execute the project on your specified domain.