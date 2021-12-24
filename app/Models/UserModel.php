<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    use HasFactory;

    public function newUser(){
        $new = new UserModel;
        $new->name = 'Pastel Richos Style';
        $new->desc  = 'chessecake';
        $new->price  = 40.20;
        $new->save();
    }
}
