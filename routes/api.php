<?php

use App\Http\Resources\VideoCollection;
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
Route::get('/video', function () {
    return new VideoCollection(Video::Series());
});