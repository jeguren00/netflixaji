<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\genreController;
use App\Http\Resources\GenreCollection;
use App\Http\Resources\VideoCollection;
use App\Models\genre;
use App\Models\Video;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// List all videos
Route::middleware('auth:sanctum')->get('/videos', function () {
    return new VideoCollection(Video::all());
});

// List all movies
Route::middleware('auth:sanctum')->get('/movies', [VideoController::class, 'getMovies']);

// genre by id
Route::middleware('auth:sanctum')->get('/genres', [genreController::class, 'getGenre']);

 // List all genres
 Route::middleware('auth:sanctum')->get('/genres', function () {
    return new GenreCollection(genre::all());
});

// Login
Route::get('/login', [AuthenticatedSessionController::class, 'loginAPI']);

// Add a video
Route::middleware('auth:sanctum')->post('/videos', [VideoController::class, 'addVideo']);

// Modify a video
// Route::patch('/videos', [VideoController::class, 'modifyVideo']);
Route::middleware('auth:sanctum')->patch('/videos', [VideoController::class, 'modifyVideo']);
