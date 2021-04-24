<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MovieCinemaBridge extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cinema_movie', function (Blueprint $table) {
            $table->bigInteger('movieId')->unsigned();
            $table->bigInteger('cinemaId')->unsigned();
            $table->foreign('movieId')
                  ->references('mId')
                  ->on('movie')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
            $table->foreign('cinemaId')
                  ->references('cId')
                  ->on('cinema')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cinema_movie');
    }
}
