<?php

namespace App\Http\Controllers;

use http\Client\Response;
use Spotify;
use SpotifySeed;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Facade;


class SongController extends Controller
{
    public function spotify()
    {
        //(new Spotify)->searchTracks('Closed on Sunday')->get();
        //return response()->json(Spotify::searchTracks('Closed on Sunday')->get());
        //return response()->json(Spotify::track('3LQTJhA1bJpKNwEzwpdJzk')->get());
        $seed = SpotifySeed::setGenres(['gospel', 'pop', 'funk'])
            ->setTargetDanceability(1);
        //->setTargetValence(1.00)
        //->setSpeechiness(0.3, 0.9)
        //->setLiveness(0.3, 1.0);
        return response()->json(Spotify::recommendations($seed)->get());
    }
    public function authorize(Request $request, Response $response)
    {
        $scopes = 'user-read-private user-read-email';
        $response.redirect('https://accounts.spotify.com/authorize' . '?response_type=code' . '&client_id=' . env('SPOTIFY_CLIENT_ID') . ($scopes ? '&scope=' . encodeURIComponent($scopes) : '') . '&redirect_uri=' . encodeURIComponent($redirect_uri));
    }
}
