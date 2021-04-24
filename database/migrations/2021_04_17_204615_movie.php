<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Movie extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movie', function (Blueprint $table) {
            $table->bigIncrements('mId');
            $table->string('mName');
            $table->json('mGenre');
            $table->string('mPoster');
            $table->string('mDesc');
            $table->string('mCreator');
            $table->string('mGuide');
            $table->string('mRating');
            $table->json('mTime');
            $table->bigInteger('cinemaId')->unsigned();
            $table->foreign('cinemaId')
                  ->references('cId')
                  ->on('cinema')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::dropIfExists('movie');
    }
}
