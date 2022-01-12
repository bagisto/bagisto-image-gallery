<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManageGalleriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manage_galleries', function (Blueprint $table) {
            $table->increments('id');
            $table->string('gallery_title')->unique();
            $table->string('gallery_code')->unique();
            $table->string('image_ids')->nullable();
            $table->integer('thumbnail_image_id')->unsigned()->nullable();
            $table->foreign('thumbnail_image_id', 'fk_270_image__gallery_thumbnail_image_id_manage__gallery')->references('id')->on('image_galleries');
            $table->boolean('status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('manage_galleries');
    }
}
