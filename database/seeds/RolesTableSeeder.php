<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        DB::table('roles')->insert(
            [
                'name' => "Admin",
                'guard_name' => "web",
                'created_at' => $faker->dateTimeBetween('-2 months', 'now'),
            ]
        );

        DB::table('roles')->insert(
            [
                'name' => "Customer",
                'guard_name' => "web",
                'created_at' => $faker->dateTimeBetween('-2 months', 'now'),
            ]
        );
    }
}
