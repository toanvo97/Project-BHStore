<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubMenu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('sub_menu', function (Blueprint $table) {
        //     $table->increments('id',true);
        //     $table->integer('idMenu')->unsigned();
        //     $table->string('name',255);
        //     $table->string('link',255);
        //     $table->string('meta',255);
        //     $table->boolean('status');
        //     $table->integer('order')->unsigned();
        //     $table->timestamps();
        // });

        // Schema::table('sub_menu', function(Blueprint $table){
        //     $table->foreign('idMenu')->references('id')->on('menu');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sub_menu');
    }
}
