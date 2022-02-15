<?php

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
});

//4. List video by id
Route::get('/video/{id}', function ($id) {
    return new VideoResource(Video::find($id));
});

//6. List all users
Route::get('/users', function () {
    return new UserCollection(User::all());
});

//8. List users by id
Route::get('/user/{id}', function ($id) {
    return new UserResource(User::find($id));
});

//10. Create user
Route::post('/user', function (Request $request) {
    $user = new User();
    $user->create($request->all());
    return User::find($user);
});

//12. Modify user
Route::post('/user/{id}', function (Request $request, $id) {
    $user = User::where("userId",$id)->update($request->all());
    return User::find($user);
});