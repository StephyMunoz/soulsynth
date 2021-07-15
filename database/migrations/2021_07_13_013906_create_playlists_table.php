<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlaylistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('playlists', function (Blueprint $table) {
            $table->unsignedBigInteger('id_list');
            $table->timestamps();
            $table->string('f_name');
            $table->foreign('f_name')->references('f_name')->on('feelings')->onDelete('restrict');
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')->references('id_user')->on('users')->onDelete('restrict');
        });

        Schema::create('playlist_song', function (Blueprint $table) {
            $table->unsignedBigInteger('s_id');
            $table->foreign('s_id')->references('s_id')->on('songs')->onDelete('restrict');
            $table->unsignedBigInteger('id_list');
            $table->foreign('id_list')->references('id_list')->on('playlists')->onDelete('restrict');
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
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('playlist_song');
        Schema::dropIfExists('playlists');
        Schema::enableForeignKeyConstraints();
    }
}
