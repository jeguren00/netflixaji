<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller {

    public function registrationView() {
        return view('registration');
    }

    public function saveUserIntoDatabase(Request $request) {
        $first_name = $request->input('name');
        $surname = $request->input('surname');
        $username = $request->input('username');
        $mail = $request->input('email');
        $password = $request->input('password');
        $birthday = $request->input('birthday');
    }
}
