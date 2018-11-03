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
        $faker = Faker\Factory::create();

        DB::table('users')->insert(
            [
                'name' => "Juliper Simanjuntak",
                'email' => 'sjuliper7@gmail.com',
                'password' => bcrypt('qwerty1'),
                'created_at' => $faker->dateTimeBetween('-2 months', 'now'),
            ]
        );

        DB::table('users')->insert(
            [
                'name' => "Jhon Sipahutar",
                'email' => 'sjhon7@gmail.com',
                'password' => bcrypt('qwerty1'),
                'created_at' => $faker->dateTimeBetween('-2 months', 'now'),
            ]
        );

        DB::table('users')->insert(
            [
                'name' => "Johan Lumbanbatu",
                'email' => 'lbjohan7@gmail.com',
                'password' => bcrypt('qwerty1'),
                'created_at' => $faker->dateTimeBetween('-2 months', 'now'),
            ]
        );

    }
}
