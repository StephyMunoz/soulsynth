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
        Playlist::truncate();
        $faker = \Faker\Factory::create();

        $playlist = Playlist::create([
            'name' => 'Happy Music',
            'feeling_id' => 1,
            'user_id' => 1,
        ]);
        $playlist->songs()->saveMany(
            $faker->randomElements(
                array(
                    Song::find(1),
                    Song::find(2),
                    Song::find(3),
                    Song::find(4),
                    Song::find(5),
                ), $faker->numberBetween(1, 5)
            ));
    }
}
