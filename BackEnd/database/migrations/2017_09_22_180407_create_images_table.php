<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            $table->increments('imageID');
            $table->unsignedInteger('placeID')->nullable();
            $table->unsignedInteger('commentID')->nullable();
            $table->text('imageName');
            $table->timestamps();
//            $table->foreign('placeID')->references('placeID')->on('place')->onDelete('cascade');
            $table->foreign('commentID')->references('commentID')->on('comments')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('images');
    }
}
