<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\User as Authenticatable;


//user must extend authenticatable to be validated in login
class User extends Authenticatable
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'userId';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
    */
    function fillModel($first_name,$surname,$username,$mail,$password,$birthday){
        $this->first_name = $first_name;
        $this->surname = $surname;
        $this->username = $username;
        $this->mail = $mail;
        $this->password = $password;
        $this->birthday = $birthday;
    }

    // /**
    //  * Always encrypt the password when it is updated.
    //  *
    //  * @param $value
    // * @return string
    // */
    // public function setPasswordAttribute($value) {
    //     $this->attributes['password'] = bcrypt($value);
    // }

    public function writeToDatabase(){
        DB::insert('insert into users(userName,name,surname,mail,password,birthDate,type) values (?, ?, ?, ?, ?, ?, ?)', [$this->username, $this->first_name, $this->surname, $this->mail,Hash::make($this->password), $this->birthday, 'normal']);
    }
}
