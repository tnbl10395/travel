<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->string('locationID',10)->primary();
            $table->string('districtID',10)->unique();
            $table->text('picture');
            $table->text('description');
            $table->text('map');
            $table->timestamps();

//            $table->foreign('districtID')->references('districtID')->on('district')->onDelete('cascade');
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
        Schema::dropIfExists('locations');
        Schema::enableForeignkeyConstraints();
    }
}
