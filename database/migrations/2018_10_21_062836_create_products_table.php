<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->double('price');
            $table->integer('stock');
            $table->string('image');
            $table->text('description');
            $table->integer('id_status')->unsigned();
            $table->integer('id_category')->unsigned();
            $table->timestamps();

            $table->foreign('id_status')->references('id')->on('status_products');
            $table->foreign('id_category')->references('id')->on('category_products');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
