<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile', function (Blueprint $table) {
            $table->unsignedInteger('userID');
            $table->string('firstName',20);
            $table->string('lastName',100)->nullable();
            $table->unsignedInteger('age')->nullable();
            $table->text('address')->nullable();
            $table->text('avatar')->nullable();
            $table->unsignedInteger('phone')->nullable();
            $table->integer('rating')->nullable();
            $table->timestamps();
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
        Schema::dropIfExists('profile');
    }
}
