<?php

use App\Http\Controllers\SongController;
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
Route::get('/spotify', [SongController::class, 'spotify']);
Route::get('/spotify/{feeling}', [SongController::class, 'feeling']);
//Route::get('/authorize', [SongController::class, 'authorize']);
