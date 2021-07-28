<?php

namespace Database\Seeders;

use App\Models\Playlist;
use App\Models\Song;
use Illuminate\Database\Seeder;

class PlaylistsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $song = Song::all();

        $playlist = Playlist::create([
            'name'=>'Happy Music',
            'feeling_id'=>1,
            'user_id'=>1,
        ]);
        $playlist->songs()->saveMany($song->id);
    }
}
