<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\genreController;
use App\Http\Controllers\searchController;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//home login regiter users function
//Route::get('/login', [LoginController::class,'toLogin']);

//this calls the createSignin() validation function in the LoginController
//Route::post('/custom-login', [LoginController::class, 'validation'])->name('login-validation');


//register, send to form route
Route::get('/register', [RegistrationController::class,'registrationView']);
//register save the data, from the form
Route::post('/register/save', [RegistrationController::class,'procesUserData']);

//init route
Route::get('/', [VideoController::class,'getVideos']);


Route::get('/search/{genre}', [searchController::class,'getResultsWithGen']);

Route::post('/search', [searchController::class,'getResultsWithText']);

//route to fill dropdown, with the genres of the database
Route::get('/start', [genreController::class,'getGenres']);


Route::get('/login/confirmMail', function () {
    return view('');
});

Route::get('/register/pago', function () {
    return view('paymentForm');
});

Route::get('/register/pago/save', function () {
    return view('');
});

//THE streaming platform
Route::get('/userHome', function () {
    return view('userHome');
});

Route::get('/userHome', function () {
    return view('userHome');
});

Route::get('/stream',[VideoController::class,'viewStream']);



Route::get('/favourites',[VideoController::class, 'getFavourites']);

Route::get('/user/changeData', function () {
    return view('userDataChangerForm');
}); 

Route::get('/user/viewData', function () {
    return view('userDataView');
}); 

Route::get('/user/changeBdData', function () {
    return view('');
});

Route::get('/movies', function () {
    return view('moviesList');
});

Route::get('/chapters', [VideoController::class, 'listChapters']);

Route::get('/addFavourite', [VideoController::class, 'addToFavourites']);

Route::get('/favourites', [VideoController::class, 'listfavourites']);

Route::get('/deleteFavourite', [VideoController::class, 'deleteFavourite']);

Route::get('/deleteAllFavourites', [VideoController::class, 'deleteAllFavourites']);

//admin part
/*
Route::get('/admin/listUsers', function () {
    return view('adminListUsers');
});

Route::get('/admin/addVideo', function () {
    return view('adminAddVideo');
});

Route::get('/adminBlockUser', function () {
    return view('adminBlockUser');
});

Route::get('/admin/changeBdData', function () {
    return view('adminChangeBdData');
});
*/

//Route::get('/', [VideoController::class,'getVideos'])->middleware(['auth'])->name('home');

//return view('moviesList');

require __DIR__.'/auth.php';
