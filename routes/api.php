<?php

use App\Http\Controllers\PlaylistController;
use App\Http\Controllers\SongController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::post('/register', [UserController::class, 'register']);
Route::post('/login', [UserController::class, 'authenticate']);

Route::group(['middleware' => ['jwt.verify']], function() {
    Route::get('/user', [UserController::class, 'getAuthenticatedUser']);

    //Song
    Route::get('/spotify', [SongController::class, 'spotify']);
    Route::get('/spotify/{feeling}', [SongController::class, 'feeling']);
    Route::get('/songs', [SongController::class, 'index']);

    //Playlist
    Route::get('/playlists', [PlaylistController::class, 'index']);
    Route::get('/users/{user}/playlists', [PlaylistController::class, 'show']);


});

//Route::get('/authorize', [SongController::class, 'authorize']);
