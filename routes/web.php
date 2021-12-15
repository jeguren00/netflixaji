<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/login', function () {
    return view('loginView');
});

Route::get('/home', function () {
    return view('moviesList');
});

Route::get('/register', function () {
    return view('registration');
});

Route::get('/login/confirmMail', function () {
    return view('');
});

Route::get('/register/pago', function () {
    return view('paymentForm');
});

Route::get('/register/save', function () {
    return view('');
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

Route::get('/video?idVideo=?', function () {
    return view('viewStreaming');
});

Route::get('/serach?AAAAAA', function () {
    return view('searchResults');
});

Route::get('/favourites', function () {
    return view('userFavourites');
});

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