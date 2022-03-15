<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SubMenu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('subMenu', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idMenu')->unsigned();
            $table->string('name',255);
            $table->string('link',255);
            $table->string('meta',255);
            $table->boolean('status');
            $table->integer('order')->unsigned();
            $table->timestamps();
        });

        Schema::table('subMenu', function(Blueprint $table){
            $table->foreign('idMenu')->references('id')->on('menu');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('subMenu');
    }
}
