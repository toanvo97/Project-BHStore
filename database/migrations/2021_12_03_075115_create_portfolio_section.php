<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePortfolioSection extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portfolio', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idSection');
            $table->string('portfolio_menu');
            $table->integer('idCateMenu');
            $table->boolean('status');
            $table->timestamps();
        });

        Schema::table('portfolio', function (Blueprint $table){
            $table->foreign('idSection')->references('id')->on('sections');
            $table->foreign('idCateMenu')->references('id')->on('category');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('portfolio');
    }
}
