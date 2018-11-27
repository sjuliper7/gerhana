<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->insert(
            [
                'name' => "Batak Zone",
                'email' => 'admin@batakzone.co.id',
                'password' => bcrypt('qwerty1'),
            ]
        );

        DB::table('users')->insert(
            [
                'name' => "Jhon Sipahutar",
                'email' => 'sjhon7@gmail.com',
                'password' => bcrypt('qwerty1'),
            ]
        );

        DB::table('users')->insert(
            [
                'name' => "Johan Lumbanbatu",
                'email' => 'lbjohan7@gmail.com',
                'password' => bcrypt('qwerty1'),
            ]
        );



    }
}
