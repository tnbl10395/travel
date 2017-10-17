<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username'=>'admin123',
            'password'=>bcrypt('admin123'),
            'email'=>'admin@gmail.com',
            'role'=>1
        ]);
    }
}
