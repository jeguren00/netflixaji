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
            $table->foreign('userName')->references('userid')->on('users');
            $table->increments('paymentId');//integer
            $table->boolean('declined');
            //remains to input foreing keys
        });
<<<<<<< HEAD
    }
=======
    }        
}
>>>>>>> be59e8963b8f34b4ff1b64cd87cb384958a46634

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
