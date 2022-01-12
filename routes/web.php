<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\RegistrationController;

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

Route::get('/', function () {
    return view('welcome');
});

//home login regiter users function
Route::get('/login', [LoginController::class,'toLogin']);

//this calls the createSignin() validation function in the LoginController
Route::post('/custom-login', [LoginController::class, 'validation'])->name('login-validation');

//Route::get('/home', function () {
//    return view('moviesList');
//});


// Route::get('/home', [VideoController::class,'fillHome']);

//register, send to form route
Route::get('/register', [RegistrationController::class,'registrationView']);
//register save the data, from the form
Route::post('/register/save', [RegistrationController::class,'procesUserData']);

Route::get('/home', [VideoController::class,'getVideos']);

Route::get('/header', function () {
    return view('layouts');
});

Route::get('/start', function () {
    return view('homeUnregistered');
});


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

Route::get('/serach?AAAAAA', function () {
    return view('searchResults');
});

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