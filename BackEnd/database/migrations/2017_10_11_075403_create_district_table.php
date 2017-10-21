<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDistrictTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('district', function (Blueprint $table) {
            $table->string('districtID',10)->primary();
            $table->string('cityID',10);
            $table->string('districtName',50);

//            $table->foreign('cityID')->references('cityID')->on('city')->onDelete('cascade');
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
        Schema::dropIfExists('district');
        Schema::enableForeignkeyConstraints();
    }
}
