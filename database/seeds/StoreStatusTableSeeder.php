<?php

use Illuminate\Database\Seeder;

class StoreStatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        DB::table('status_stores')->insert(
            [
                'name' => "PENDING",
                'created_at' => $faker->dateTimeBetween('-2 months', 'now'),
            ]
        );

        DB::table('status_stores')->insert(
            [
                'name' => "ACCEPTED",
                'created_at' => $faker->dateTimeBetween('-2 months', 'now'),
            ]
        );

        DB::table('status_stores')->insert(
            [
                'name' => "REJECTED",
                'created_at' => $faker->dateTimeBetween('-2 months', 'now'),
            ]
        );

    }
}
