<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Favourites extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('favourites', function(Blueprint $table){
            $table->unsignedInteger('userId');
            $table->unsignedInteger('idVideo');
            $table->foreign('idVideo')->references('idVideo')->on('videos');
            $table->foreign('userId')->references('userId')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('favourites');
    }
}
