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

        DB::table('model_has_permissions')->insert(
            [
                'role_id' => 1,
                'model_type' => "App\User",
                'model_id' => 1,
            ]
        );

        DB::table('model_has_permissions')->insert(
            [
                'role_id' => 2,
                'model_type' => "App\User",
                'model_id' => 2,
            ]
        );

        DB::table('model_has_permissions')->insert(
            [
                'role_id' => 2,
                'model_type' => "App\User",
                'model_id' => 3,
            ]
        );

        DB::table('role_has_permissions')->insert(
            [
                'permission_id' => 1,
                'role_id' => 1,
            ]
        );

        DB::table('role_has_permissions')->insert(
            [
                'permission_id' => 2,
                'role_id' => 2,
            ]
        );

        DB::table('role_has_permissions')->insert(
            [
                'permission_id' => 3,
                'role_id' => 2,
            ]
        );

    }
}
