<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id',true);
            $table->integer('idCatePro')->unsigned();
            $table->string('name',250);
            $table->integer('idImg');
            $table->integer('order');
            $table->boolean('status');
            $table->string('link');
            $table->timestamps();
            $table->foreign('idCatePro')->references('id')->on('category_product');
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
