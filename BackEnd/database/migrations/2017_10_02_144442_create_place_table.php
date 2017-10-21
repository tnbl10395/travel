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
            $table->string('locationID');
            $table->unsignedInteger('categoryID');
            $table->string('placeName',100);
            $table->text('description');
            $table->text('detail');
            $table->text('map');
            $table->float('rating')->nullable();
            $table->timestamps();
            $table->foreign('locationID')->references('locationID')->on('locations')->onDelete('casecade');
            $table->foreign('categoryID')->references('categoryID')->on('category')->onDelete('cascade');
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
        Schema::dropIfExists('place');
        Schema::enableForeignkeyConstraints();
    }
}
