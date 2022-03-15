<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNervousSection extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nervous', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idSection');
            $table->string('icon');
            $table->string('boxTitle');
            $table->string('boxContent');
            $table->boolean('status');
            $table->integer('order');
            $table->timestamps();
        });

        Schema::table('nervous', function (Blueprint $table) {
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
        Schema::dropIfExists('nervous');
    }
}
