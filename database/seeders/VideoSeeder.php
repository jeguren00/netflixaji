<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
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
        'type' => "serie",
        'imagen' => "blackMirror.jpg" ,
        'idGenere' => "1" ,
        'file' => "./blackMirror11.avi",
        'season' => "1",
        'chapter' => "1"]);

        DB::table('videos')->insert(['title' => 'Black Mirror', 
        'year' => 2011 , 
        'sinopsis' => "https://en.wikipedia.org/wiki/Black_Mirror",
        'duration' => "" ,
        'type' => "serie",
        'imagen' => "blackMirror.jpg" ,
        'idGenere' => "1" ,
        'file' => "./blackMirror12.avi",
        'season' => "1",
        'chapter' => "2"]);

        DB::table('videos')->insert(['title' => 'Black Mirror', 
        'year' => 2011 , 
        'sinopsis' => "https://en.wikipedia.org/wiki/Black_Mirror",
        'duration' => "" ,
        'type' => "serie",
        'imagen' => "blackMirror.jpg" ,
        'idGenere' => "1" ,
        'file' => "./blackMirror13.avi",
        'season' => "1",
        'chapter' => "3"]);
    }
}
