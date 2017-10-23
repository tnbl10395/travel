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
            $table->unsignedInteger('placeID');
            $table->text('content');
            $table->integer('amountOfLike');
            $table->integer('amountOfDisLike');
            $table->integer('status');
            $table->timestamps();

//            $table->foreign('placeID')->references('placeID')->on('place')->onDelete('cascade');
            $table->foreign('userID')->references('userID')->on('users')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignkeyConstraints();
        Schema::dropIfExists('comments');
        Schema::enableForeignkeyConstraints();
    }
}
