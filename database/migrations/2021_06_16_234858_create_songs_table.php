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
            $table->string('name');
            $table->string('href');
            $table->string('artist')->nullable();
            $table->string('producer')->nullable();
            $table->date('release_date')->nullable();
            $table->string('genre')->nullable();
            $table->string('album')->nullable();
            $table->time('duration')->nullable();
            $table->unsignedBigInteger('feeling_id');
            $table->foreign('feeling_id')->references('id')->on('feelings')->onDelete('restrict');
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
        Schema::dropIfExists('songs');
    }
}
