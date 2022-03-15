<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactSection extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idSection');
            $table->string('name',250);
            $table->string('email',250);
            $table->string('subTitle',250);
            $table->string('description');
            $table->boolean('status');
            $table->integer('order');
            $table->timestamps();
        });

        Schema::table('contact', function(Blueprint $table){
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
        Schema::dropIfExists('contact');
    }
}
