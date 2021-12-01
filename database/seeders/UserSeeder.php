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
        DB::table('users')->insert(['userName' => 'jgarcia', 'name' => 'jordi', 'surname' => 'garcia', 'mail' => 'jeguren@gmail.com','password' => 'jordi','birthDate' => now()
        ,'type' => 'normal','block' => false,'creditCard' => 14231 ,'creditCardExpirationDate' => '23/12','creditCardCVV' => '339' ]);
        DB::table('genres')->insert(['name' => 'science fiction', 'description' => 'https://en.wikipedia.org/wiki/Science_fiction']);
        DB::table('videos')->insert(['title' => 'Back to the future', 'year' => 1985 , 'sinopsis' => "aaaaa",'duration' => "107" ,'type' => "movie",'type' => "movie"
        ,'imagen' => "aaaaa" ,'idGenere' => "1" ,'file' => "./aaaa" ]);
    }
}
