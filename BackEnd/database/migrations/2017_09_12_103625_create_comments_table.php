<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('commentID');
            $table->unsignedInteger('userID');
            $table->unsignedInteger('hotelID');
            $table->unsignedInteger('restaurantID');
            $table->unsignedInteger('tourAttractionID');
            $table->text('content');
            $table->integer('amountOfLike');
            $table->integer('amountOfDisLike');
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
        Schema::dropIfExists('comments');
    }
}
