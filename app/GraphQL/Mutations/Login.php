<?php

namespace App\GraphQL\Mutations;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class Login
{
    /**
     * @param  null  $_
     * @param  array<string, mixed>  $args
     */
    public function __invoke($_, array $args): User
{            
        
        if (!Auth::attempt($args)){
            return null;
            //throw new Error('Invalid credentials.');
        }
        $user = User::where('email', auth()->user()->email)->firstOrFail();

        //si es un admin se crea el token con privilegios de admin
        if($user->type == "admin") {
            $token = $user->createToken('token', ['admin'])->plainTextToken;
        } else {
        $token = $user->createToken('token')->plainTextToken;
        }
        $user['token']=$token;
        
        return $user ;
  
    }
}
