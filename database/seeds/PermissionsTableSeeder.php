<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        DB::table('permissions')->insert(
            [
                'name' => "Administer roles & permissions",
                'guard_name' => "web",
                'created_at' => $faker->dateTimeBetween('-2 months', 'now'),
            ]
        );

        DB::table('permissions')->insert(
            [
                'name' => "Access Store",
                'guard_name' => "web",
                'created_at' => $faker->dateTimeBetween('-2 months', 'now'),
            ]
        );

        DB::table('permissions')->insert(
            [
                'name' => "My Store",
                'guard_name' => "web",
                'created_at' => $faker->dateTimeBetween('-2 months', 'now'),
            ]
        );

    }
}
