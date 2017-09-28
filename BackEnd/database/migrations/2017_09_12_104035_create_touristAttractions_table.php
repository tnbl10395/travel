<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTouristAttractionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('touristAttractions', function (Blueprint $table) {
            $table->increments('touristAttractionID');
            $table->string('touristAttractionName',50);
            $table->unsignedInteger('locationID');
            $table->text('description');
            $table->text('detail');
            $table->text('map');
            $table->integer('rating');
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
        Schema::dropIfExists('touristAttractions');
    }
}
