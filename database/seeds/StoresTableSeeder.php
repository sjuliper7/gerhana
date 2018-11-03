<?php

use Illuminate\Database\Seeder;

class StoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        DB::table('stores')->insert(
            [
                'store_name' => 'Johan Toko Kita',
                'store_owner' => "Johan Amanada",
                'store_email' => "johan-toko-kita@gmail.com",
                'store_phone' => "0812321345111",
                'store_address' => "Jalan Sie Rampah",
                'store_ktp' => "098765432121",
                'store_ktp_image' => "ktp.jpg",
                'store_npwp' => "2245y56543235432",
                'store_npwp_image' => "npwp.jpeg",
                'store_account_bank' => "987654567898765431",
                'store_account_type' => "Mandiri",
                'store_account_bank_image' => "account.jpeg",
                'id_request' => '1',
                'id_user' => '2',
                'created_at' => $faker->dateTimeBetween('-2 months', 'now'),
            ]
        );
    }
}
