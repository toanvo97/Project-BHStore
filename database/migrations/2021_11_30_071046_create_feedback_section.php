<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeedbackSection extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feedback', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idSection');
            $table->string('idCustomer');
            $table->string('name',250);
            $table->string('image');
            $table->string('feedBackDetail');
            $table->string('kind');
            $table->boolean('status');
            $table->integer('order');
            $table->timestamps();
        });

        Schema::table('feedback', function(Blueprint $table){
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
        Schema::dropIfExists('feedback');
    }
}
