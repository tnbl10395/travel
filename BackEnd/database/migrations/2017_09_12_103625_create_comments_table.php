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
            $table->unsignedInteger('userID')->nullable();
            $table->unsignedInteger('placeID')->nullable();
            $table->text('content');
            $table->integer('amountOfLike');
            $table->integer('amountOfDisLike');
            $table->timestamps();
            $table->foreign('userID')->references('userID')->on('users');
//            $table->foreign('placeID')->references('placeID')->on('place');
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
