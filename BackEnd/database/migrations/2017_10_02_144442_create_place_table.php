<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlaceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('place', function (Blueprint $table) {
            $table->increments('placeID');
            $table->unsignedInteger('categoryID');
            $table->string('placeName',100);
            $table->text('description');
            $table->text('detail');
            $table->text('address')->nullable();
            $table->integer('cost')->nullable();
            $table->text('map');
            $table->string('phone',20)->nullable();
            $table->integer('rating');
            $table->timestamps();
            $table->foreign('categoryID')->references('categoryID')->on('category');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('place');
    }
}
