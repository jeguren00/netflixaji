<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Videos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos', function(Blueprint $table) {
            $table->increments('idVideo');//integer
            $table->String('title');
            $table->integer('year');
            $table->text('sinopsis');
            $table->String('duration');
            $table->string('type');
            $table->string('image');
            $table->string('file');
            $table->string('trailer');
            $table->integer('season')->default(0);
            $table->integer('chapter')->default(0);
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
