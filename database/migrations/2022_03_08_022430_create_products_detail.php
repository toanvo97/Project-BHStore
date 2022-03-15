<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products_detail', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idPro');
            $table->string('promotion');
            $table->string('accessories');
            $table->boolean('outofstock');
            $table->integer('idImg');
            $table->integer('order');
            $table->boolean('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products_detail');
    }
}
