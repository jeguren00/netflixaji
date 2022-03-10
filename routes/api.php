<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\genreController;
use App\Http\Resources\GenreCollection;
use App\Models\genre;
use App\Http\Resources\UserCollection;
use App\Http\Resources\UserResource;
use App\Http\Resources\VideoCollection;
use App\Http\Resources\VideoResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Video;


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

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});

//2. List all series
Route::get('/series', function () {
    return new VideoCollection(Video::where('type', 'serie')->where('season', 0)->where('chapter', 0)->get());
})->middleware('auth:sanctum');

//4. List video by id
Route::get('/video/{id}', function ($id) {
    return new VideoResource(Video::find($id));
})->middleware('auth:sanctum');

//6. List all users
Route::get('/users', function () {
    return new UserCollection(User::all());
})->middleware('auth:sanctum');

// List all videos
Route::middleware('auth:sanctum')->get('/videos', function () {
    return new VideoCollection(Video::all());
});

// List all movies
Route::middleware('auth:sanctum')->get('/movies', [VideoController::class, 'getMovies']);

// genre by id
//Route::middleware('auth:sanctum')->get('/genres', [genreController::class, 'getGenre']);

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
//8. List users by id
Route::get('/user/{id}', function ($id) {
    return new UserResource(User::find($id));
})->middleware('auth:sanctum');;

//10. Create user
Route::post('/user', function (Request $request) {
    $user = new User();
    $user->create($request->all());
    return User::find($user);
})->middleware('auth:sanctum');;

//12. Modify user
Route::post('/user/{id}', function (Request $request, $id) {
    $user = User::where("userId",$id)->update($request->all());
    return User::find($user);
})->middleware('auth:sanctum');;
