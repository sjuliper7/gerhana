<?php

use Illuminate\Database\Seeder;

class RequestStoreTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        DB::table('request_stores')->insert(
            [
                'store_name' => 'Jhon Toko Haduan',
                'store_owner' => "Jhon Charles",
                'store_email' => "jhon-toko@gmail.com",
                'store_phone' => "0812321345678",
                'store_address' => "Jalan Kantor BUpati Tobasa",
                'store_ktp' => "09876543212",
                'store_ktp_image' => "ktp.jpg",
                'store_npwp' => "2245y5654323543",
                'store_npwp_image' => "npwp.jpeg",
                'store_account_bank' => "9876545678987654321",
                'store_account_type' => "Mandiri",
                'store_account_bank_image' => "account.jpeg",
                'store_province'=>"",
                'store_districts'=>"",
                'store_sub_districts'=>"",
                'comment' => '-',
                'id_status' => '2',
                'id_user' => '2',
                'created_at' => $faker->dateTimeBetween('-2 months', 'now'),
            ]
        );

        DB::table('request_stores')->insert(
            [
                'store_name' => 'Andalan Toko Kita',
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
                'store_province'=>"",
                'store_districts'=>"",
                'store_sub_districts'=>"",
                'comment' => '-',
                'id_status' => '1',
                'id_user' => '3',
                'created_at' => $faker->dateTimeBetween('-2 months', 'now'),
            ]
        );
    }
}
