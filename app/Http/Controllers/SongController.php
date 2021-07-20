<?php

namespace App\Http\Controllers;

use App\Models\Feeling;
use http\Client\Response;
use Spotify;
use SpotifySeed;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Facade;


class SongController extends Controller
{
    public function spotify(Feeling $feeling)
    {
        //(new Spotify)->searchTracks('Closed on Sunday')->get();
        //return response()->json(Spotify::searchTracks('Closed on Sunday')->get());
        //return response()->json(Spotify::track('3LQTJhA1bJpKNwEzwpdJzk')->get());
        //$seedU = SpotifySeed::setUser();
        $seed = SpotifySeed::setGenres(['gospel', 'pop', 'funk'])
            ->setTargetDanceability(1);
        //->setTargetValence(1.00)
        //->setSpeechiness(0.3, 0.9)
        //->setLiveness(0.3, 1.0);
        return response()->json(Spotify::recommendations($seed)->get());
    }

    public function feeling(Feeling $feeling)
    {
        //HAPPY
        if ($feeling->id == 1) {

            $seed = SpotifySeed::setGenres(['salsa', 'tropical', 'pop'])
                ->setLiveness(0.5, 1)
                ->setDanceability(0.6, 1);

            return response()->json(Spotify::recommendations($seed)->get());
        } else if ($feeling->id == 2) {  //ROMANTIC

            $seed = SpotifySeed::setGenres(['jazz', 'blues'])
                ->setTargetDanceability(0, 0.1)
                ->setSpeechiness(0.3, 0.7)
                ->setTempo(0, 0.2);

            return response()->json(Spotify::recommendations($seed)->get());

        } else if ($feeling->id == 3) {  //SAD

            $seed = SpotifySeed::setGenres(['jazz', 'blues'])
                ->setEnergy(0, 0.2)
                ->setTargetInstrumentalness(0.3);
            return response()->json(Spotify::recommendations($seed)->get());

        } else if ($feeling->id == 4) {  //ANGRY

            $seed = SpotifySeed::setGenres(['rock', 'power metal'])
                ->setTargetInstrumentalness(1);
            return response()->json(Spotify::recommendations($seed)->get());

        } else if ($feeling->id == 5) {   //PANIC

            $seed = SpotifySeed::setGenres(['punk', 'classic'])
                ->setTargetInstrumentalness(1);
            return response()->json(Spotify::recommendations($seed)->get());

        } else if ($feeling->id == 6) {  //CURIOUS

            $seed = SpotifySeed::setGenres(['punk', 'reggae'])
                ->setTargetEnergy(0.4);
                //->setTargetPopularity(0.5);
            return response()->json(Spotify::recommendations($seed)->get());
        }
    }
}
