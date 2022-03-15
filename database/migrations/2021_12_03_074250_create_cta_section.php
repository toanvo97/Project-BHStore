<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCtaSection extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('count', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idSection');
            $table->integer('number');
            $table->string('boxTitle');
            $table->boolean('status');
            $table->integer('order');
            $table->timestamps();
        });

        Schema::table('count', function (Blueprint $table) {
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
        Schema::dropIfExists('count');
    }
}
