<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoryProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_product', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idMainCate');
            $table->string('name');
            $table->integer('order');
            $table->boolean('status');
            $table->string('meta');
            $table->string('link');
            $table->timestamps();
        });

        Schema::table('category_product', function (Blueprint $table){
            $table->foreign('idMainCate')->references('id')->on('category');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category_product');
    }
}
