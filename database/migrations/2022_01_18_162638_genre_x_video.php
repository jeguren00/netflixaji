<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class GenreXVideo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('GenreXVideo', function(Blueprint $table){
            $table->unsignedInteger('idGenere');
            $table->unsignedInteger('idVideo');
            $table->foreign('idVideo')->references('idVideo')->on('videos');
            $table->foreign('idGenere')->references('idGenere')->on('genres');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('GenreXVideo');
    }
}
