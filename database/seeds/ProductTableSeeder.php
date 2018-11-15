<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert(
            [
                'name'  => "Menunggu Pembayaran",
                'price' => "50000",
                'stock' => "20",
                'description' => "Dibuat dari bahan yang lembut, tersedia ukuran M,L dan S",
                'story' => "Produk ini hasil kerajinan tangan Orang Hinalang",
                'images'=> "string",
                'weight'=> "4g",
                'id_status'=> '2',
                'id_category'=> '2',
                'id_store'=> '2',
            ]
        );

        DB::table('products')->insert(
            [
                'name'  => "Menunggu Pembayaran",
                'price' => "50000",
                'stock' => "20",
                'description' => "Dibuat dari bahan yang lembut, tersedia ukuran M,L dan S",
                'story' => "Produk ini hasil kerajinan tangan Orang Hinalang",
                'images'=> "string",
                'weight'=> "4g",
                'id_status'=> '2',
                'id_category'=> '2',
                'id_store'=> '2',
            ]
        );
    }
}
