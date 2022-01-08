<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    
    //display the login form
    public function toLogin()
    {
        return view('loginView');
    }


    function validation(Request $request)
    {
        //validate userName and password
        $credenciales = $request->validate([
            'userName' => 'required',
            'password' => 'required'
        ]);

        //if correct, redirect to favourites
        if (Auth::attempt($credenciales)) {
            return redirect('/home');
        }
        return back()->withErrors(['not_valid' => 'El nombre de usuario o la contraseña son incorrectos!']);
    }





    // //validate and login
    // public function createSignin(Request $request)
    // {
    //     $request->validate([
    //         'userName' => 'required',
    //         'password' => 'required',
    //     ]);

    //     $credentials = $request->only('userName', 'password');

    //     if (Auth::attempt($credentials)) {
    //         return redirect()->intended('userFavourites')
    //                     ->withSuccess('Logged-in');
    //     }
    //     return redirect("/login")->withSuccess('Credentials are wrong.');
    // }

}
