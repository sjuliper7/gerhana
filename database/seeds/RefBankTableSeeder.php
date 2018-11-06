<?php

use Illuminate\Database\Seeder;

class RefBankTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        DB::table('ref_banks')->insert(
            [
                'account_vendor' => "BRI",
                'account_number' => "8765432123",
                'created_at' => $faker->dateTimeBetween('-2 months', 'now'),
            ]
        );

        DB::table('ref_banks')->insert(
            [
                'account_vendor' => "BNI",
                'account_number' => "0987654321234",
                'created_at' => $faker->dateTimeBetween('-2 months', 'now'),
            ]
        );

        DB::table('ref_banks')->insert(
            [
                'account_vendor' => "MANDIRI",
                'account_number' => "123456789009",
                'created_at' => $faker->dateTimeBetween('-2 months', 'now'),
            ]
        );
    }
}
