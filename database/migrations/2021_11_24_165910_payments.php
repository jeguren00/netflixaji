<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Payments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('payments', function(Blueprint $table) {
            $table->unsignedInteger('userId');
            $table->foreign('userId')->references('userId')->on('users');
            $table->date('paymentDate');
            $table->increments('paymentId');//integer
            $table->boolean('declined');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('videos');
    }
}
