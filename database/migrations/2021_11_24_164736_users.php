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
            $table->String('userName');
            $table->String('name');
            $table->String('surname');
            $table->String('mail');
            $table->String('hash');
            $table->date('birthDate');
            $table->String('type');
            $table->boolean('block');
            $table->integer('creditCard');
            $table->integer('creditCardExpirationDate');
            $table->integer('creditCardCVV');
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
