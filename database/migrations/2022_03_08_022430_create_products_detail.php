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
            $table->increments('id',true);
            $table->integer('idPro')->unsigned();
            $table->string('promotion');
            $table->string('accessories');
            $table->boolean('outOfStock');
            $table->integer('idImg');
            $table->integer('order');
            $table->boolean('status');
            $table->timestamps();
            $table->foreign('idPro')->references('id')->on('products');
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
