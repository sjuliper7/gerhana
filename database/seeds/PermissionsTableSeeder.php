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
        DB::table('permissions')->insert(
            [
                'name' => "Administer roles & permissions",
            ]
        );

        DB::table('permissions')->insert(
            [
                'name' => "Access Store",
            ]
        );

        DB::table('permissions')->insert(
            [
                'name' => "My Store",
            ]
        );
    }
}
