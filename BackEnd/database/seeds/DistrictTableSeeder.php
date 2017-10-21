<?php

use Illuminate\Database\Seeder;

class DistrictTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('district')->insert([
            [
                'districtID'=>'01',
                'cityID'=>'04',
                'districtName'=>'Hải Châu'
            ],
            [
                'districtID'=>'02',
                'cityID'=>'04',
                'districtName'=>'Sơn Trà'
            ],
            [
                'districtID'=>'03',
                'cityID'=>'04',
                'districtName'=>'Thanh Khê'
            ],
            [
                'districtID'=>'04',
                'cityID'=>'04',
                'districtName'=>'Ngũ Hành Sơn'
            ],
            [
                'districtID'=>'05',
                'cityID'=>'04',
                'districtName'=>'Liên Chiểu'
            ],
            [
                'districtID'=>'06',
                'cityID'=>'04',
                'districtName'=>'Hòa Vang'
            ]
        ]);
    }
}
