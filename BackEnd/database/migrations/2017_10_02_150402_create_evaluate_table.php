<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEvaluateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluate', function (Blueprint $table) {
            $table->increments('evaluateID');
            $table->unsignedInteger('userID');
            $table->unsignedInteger('placeID');
            $table->unsignedInteger('rating');
            $table->timestamps();
            $table->foreign('userID')->references('userID')->on('users')->onDelete('cascade');
            $table->foreign('placeID')->references('placeID')->on('place')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('evaluate');
    }
}
