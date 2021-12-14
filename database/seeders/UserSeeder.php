<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //users
        DB::table('users')->insert(['userName' => 'jgarcia', 
        'name' => 'jordi', 
        'surname' => 'garcia', 
        'mail' => 'jeguren@gmail.com',
        'password' => 'jordi',
        'birthDate' => now(),
        'type' => 'normal',
        'block' => false,
        'creditCard' => 14231 ,
        'creditCardExpirationDate' => '23/12',
        'creditCardCVV' => '339' ]);

        DB::table('users')->insert(['userName' => 'acuesta', 
        'name' => 'adan', 
        'surname' => 'cuesta', 
        'mail' => 'acuesta@gmail.com',
        'password' => 'adan',
        'birthDate' => now(),
        'type' => 'normal',
        'block' => false,
        'creditCard' => 14231 ,
        'creditCardExpirationDate' => '23/12',
        'creditCardCVV' => '339' ]);

        DB::table('users')->insert(['userName' => 'ibrugada', 
        'name' => 'ignasi', 
        'surname' => 'brugada', 
        'mail' => 'ibrugada@gmail.com',
        'password' => 'ignasi',
        'birthDate' => now(),
        'type' => 'normal',
        'block' => false,
        'creditCard' => 14231 ,
        'creditCardExpirationDate' => '23/12',
        'creditCardCVV' => '339' ]);

        //genere
        DB::table('genres')->insert(['name' => 'science fiction', 
        'description' => 'https://en.wikipedia.org/wiki/Science_fiction']);

        //2 movies 1 serie
        DB::table('videos')->insert(['title' => 'Back to the future', 
        'year' => 1985 , 
        'sinopsis' => "aaaaa",
        'duration' => "107" ,
        'type' => "movie",
        'imagen' => "backToTheFuture.jpg" ,
        'idGenere' => "1" ,
        'file' => "./backToTheFuture.avi" ]);

        DB::table('videos')->insert(['title' => 'Jurassic Park', 
        'year' => 1993 , 
        'sinopsis' => "https://en.wikipedia.org/wiki/Jurassic_Park_(film)",
        'duration' => "128" ,
        'type' => "movie",
        'imagen' => "jurassicPark.jpg" ,
        'idGenere' => "1" ,
        'file' => "./jurassicPark.avi" ]);

        //serie
        DB::table('videos')->insert(['title' => 'Black Mirror', 
        'year' => 2011 , 
        'sinopsis' => "https://en.wikipedia.org/wiki/Black_Mirror",
        'duration' => "" ,
        'type' => "movie",
        'imagen' => "blackMirror.jpg" ,
        'idGenere' => "1" ,
        'file' => "./blackMirror11.avi",
        'season' => "1",
        'chapter' => "1"]);

        DB::table('videos')->insert(['title' => 'Black Mirror', 
        'year' => 2011 , 
        'sinopsis' => "https://en.wikipedia.org/wiki/Black_Mirror",
        'duration' => "" ,
        'type' => "movie",
        'imagen' => "blackMirror.jpg" ,
        'idGenere' => "1" ,
        'file' => "./blackMirror12.avi",
        'season' => "1",
        'chapter' => "2"]);

        DB::table('videos')->insert(['title' => 'Black Mirror', 
        'year' => 2011 , 
        'sinopsis' => "https://en.wikipedia.org/wiki/Black_Mirror",
        'duration' => "" ,
        'type' => "movie",
        'imagen' => "blackMirror.jpg" ,
        'idGenere' => "1" ,
        'file' => "./blackMirror13.avi",
        'season' => "1",
        'chapter' => "3"]);
    }
}
