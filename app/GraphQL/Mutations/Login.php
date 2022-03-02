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
        $token = $user->createToken('')->plainTextToken;
        $user['token']=$token;
        
        return $user ;
  
    }
}
