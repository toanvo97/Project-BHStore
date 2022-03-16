<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBhUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bh_users', function(Blueprint $table){
            $table->increments('id',true);
            $table->integer('idAuth')->unsigned();
            $table->string('fullName',50);
            $table->string('userName',50);
            $table->string('email')->unique();
            $table->string('address',150);
            $table->string('phone',30);
            $table->string('image')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->boolean('status');
            $table->integer('order');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::table('bh_users', function(Blueprint $table){
            $table->foreign('idAuth')->references('id')->on('authorities');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bh_users');
    }
}
