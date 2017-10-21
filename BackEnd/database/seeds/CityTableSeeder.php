<?php

use Illuminate\Database\Seeder;

class CityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('city')->insert([
            'cityID'=>'04',
            'cityName'=>'Đà Nẵng'
        ]);
    }
}
