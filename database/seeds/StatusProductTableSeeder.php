<?php

use Illuminate\Database\Seeder;

class StatusProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        DB::table('status_products')->insert(
            [
                'name' => "BARU",
                'created_at' => $faker->dateTimeBetween('-2 months', 'now'),
            ]
        );

        DB::table('status_products')->insert(
            [
                'name' => "BEKAS",
                'created_at' => $faker->dateTimeBetween('-2 months', 'now'),
            ]
        );
    }
}
