<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeam extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('team', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idSection')->unsigned();
            $table->string('name');
            $table->string('position');
            $table->string('subDesciption');
            $table->string('image');
            $table->boolean('status');
            $table->integer('order');
            $table->timestamps();
        });

        Schema::table('team', function(Blueprint $table){
            $table->foreign('idSection')->references('id')->on('sections');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('team');
    }
}
