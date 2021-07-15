<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSongsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('songs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('s_name');
            $table->string('s_artist');
            $table->string('s_producer');
            $table->date('release_date');
            $table->string('s_genre');
            $table->string('s_album');
            $table->time('s_duration');
            $table->timestamps();
            $table->string('f_name');
            $table->foreign('f_name')->references('f_name')->on('feelings')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('songs');
    }
}
