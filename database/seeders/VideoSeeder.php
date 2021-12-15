<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


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
        'image' => "./img/backToTheFuture.jpg" ,
        'idGenere' => "1" ,
        'file' => "./public/video/backToTheFuture.avi" ]);

        DB::table('videos')->insert(['title' => 'Jurassic Park', 
        'year' => 1993 , 
        'sinopsis' => "https://en.wikipedia.org/wiki/Jurassic_Park_(film)",
        'duration' => "128" ,
        'type' => "movie",
        'image' => "./img/jurassicPark.jpg" ,
        'idGenere' => "1" ,
        'file' => "./public/video/jurassicPark.avi" ]);

        //serie
        DB::table('videos')->insert(['title' => 'Black Mirror', 
        'year' => 2011 , 
        'sinopsis' => "https://en.wikipedia.org/wiki/Black_Mirror",
        'duration' => "" ,
        'type' => "serie",
        'image' => "./img/blackMirror.jpg" ,
        'idGenere' => "1" ,
        'file' => "./public/video/blackMirror11.avi",
        'season' => "1",
        'chapter' => "1"]);

        DB::table('videos')->insert(['title' => 'Black Mirror', 
        'year' => 2011 , 
        'sinopsis' => "https://en.wikipedia.org/wiki/Black_Mirror",
        'duration' => "" ,
        'type' => "serie",
        'image' => "./img/blackMirror.jpg" ,
        'idGenere' => "1" ,
        'file' => "./public/video/blackMirror12.avi",
        'season' => "1",
        'chapter' => "2"]);

        DB::table('videos')->insert(['title' => 'Black Mirror', 
        'year' => 2011 , 
        'sinopsis' => "https://en.wikipedia.org/wiki/Black_Mirror",
        'duration' => "" ,
        'type' => "serie",
        'image' => "./img/blackMirror.jpg" ,
        'idGenere' => "1" ,
        'file' => "./public/video/blackMirror13.avi",
        'season' => "1",
        'chapter' => "3"]);
    }
}
