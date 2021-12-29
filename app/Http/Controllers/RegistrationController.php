<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Requests\RegisterRequest;
use App\Models\User as ModelsUser;


class RegistrationController extends Controller {

    function __construct(){
        $this->user = new ModelsUser();
    }
    public function registrationView() {
        return view('registration');
    }

    public function procesUserData(RegisterRequest $request) {
        
        $first_name = $request->input('name');
        $surname = $request->input('surname');
        $username = $request->input('username');
        $mail = $request->input('mail');
        $password = $request->input('password');
        $birthday = $request->input('birthday');
              
        $this->user->fillModel($first_name,$surname,$username,$mail,$password,$birthday);
        $this->user->writeToDatabase();

        return redirect('/home');
        //aqui fer el required per comprovar que la info sigui com la demanada
    }
}
