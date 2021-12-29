<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Users extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('users', function(Blueprint $table) {
            $table->increments('userId');
            $table->String('userName');
            $table->String('name');
            $table->String('surname');
            $table->String('mail');
            $table->String('password');
            $table->date('birthDate');
            $table->String('type');
            $table->boolean('block')->default(false);
            $table->integer('creditCard')->default(0);
            $table->String('creditCardExpirationDate')->default('');
            $table->integer('creditCardCVV')->default(0);
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
        Schema::drop('users');
    }
}
