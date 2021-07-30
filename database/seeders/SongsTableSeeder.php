<?php

namespace Database\Seeders;

use App\Models\Song;
use Illuminate\Database\Seeder;

class SongsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Song::truncate();

        Song::create([
            'name'=>'Various Artists',
            'href'=>'https://open.spotify.com/artist/0LyfQWJT6nXafLPZqxe9Of',
            'artist'=> 'Various Artists',
            'producer'=>null,
            'release_date'=>null,
            'genre'=>null,
            'album'=>null,
            'duration'=>null,
            'image'=>null,
            'feeling_id'=>1,
        ]);

        Song::create([
            'name'=>'Salsabor 2',
            'href'=>'https://open.spotify.com/album/6HStcqoXE3cTLx6jMKc1BE',
            'artist'=> 'Various Artists',
            'producer'=>null,
            'release_date'=>'2005-05-22',
            'genre'=>null,
            'album'=>null,
            'duration'=>null,
            'image'=>'https://i.scdn.co/image/ab67616d00001e023a63e8fffa3e3fcefe3b28a1',
            'feeling_id'=>1,
        ]);
        Song::create([
            'name'=>'Ray Sepulveda',
            'href'=>'https://open.spotify.com/artist/401C0Uw5vYtBffS3qqHVjE',
            'artist'=> 'Ray Sepulveda',
            'producer'=>null,
            'release_date'=>null,
            'genre'=>null,
            'album'=>null,
            'duration'=>null,
            'image'=>'https://i.scdn.co/image/ab67616d00001e023a63e8fffa3e3fcefe3b28a1',
            'feeling_id'=>1,
        ]);
        Song::create([
            'name'=>'Amar Sin Mentiras',
            'href'=>'https://open.spotify.com/artist/4wLXwxDeWQ8mtUIRPxGiD6',
            'artist'=> 'Marc Anthony',
            'producer'=>null,
            'release_date'=>null,
            'genre'=>'salsa',
            'album'=>null,
            'duration'=>null,
            'image'=>'https://i.scdn.co/image/ab67616d00001e02aa7da6f38ade089ddbc0940c',
            'feeling_id'=>1,
        ]);
        Song::create([
            'name'=>'Tu amor me hace bien',
            'href'=>'https://open.spotify.com/artist/4wLXwxDeWQ8mtUIRPxGiD6',
            'artist'=> 'Marc Anthony',
            'producer'=>null,
            'release_date'=>null,
            'genre'=>'salsa',
            'album'=>null,
            'duration'=>null,
            'image'=>'https://i.scdn.co/image/ab67616d00001e02aa7da6f38ade089ddbc0940c',
            'feeling_id'=>1,
        ]);
        Song::create([
            'name'=>'Amor y Control',
            'href'=>'https://open.spotify.com/artist/5BwMgvRwlq61SmknvsVIQj',
            'artist'=> 'Rubén Blades',
            'producer'=>null,
            'release_date'=>null,
            'genre'=>'salsa',
            'album'=>null,
            'duration'=>null,
            'image'=>null,
            'feeling_id'=>1,
        ]);
        Song::create([
            'name'=>'Amor y Control',
            'href'=>'https://open.spotify.com/artist/5BwMgvRwlq61SmknvsVIQj',
            'artist'=> 'ubén Blades',
            'producer'=>null,
            'release_date'=>null,
            'genre'=>'salsa',
            'album'=>null,
            'duration'=>null,
            'image'=>null,
            'feeling_id'=>1,
        ]);

    }
}
