<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;


use Illuminate\Database\Seeder;

class genreXVideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('GenreXVideo')->insert(
            ['idGenere' => '1', 
            'idVideo' => '1'
            ]
        );

        DB::table('GenreXVideo')->insert(
            ['idGenere' => '1', 
            'idVideo' => '2'
            ]
        );

        DB::table('GenreXVideo')->insert(
            ['idGenere' => '1', 
            'idVideo' => '3'
            ]
        );

        DB::table('GenreXVideo')->insert(
            ['idGenere' => '2', 
            'idVideo' => '4'
            ]
        );

        DB::table('GenreXVideo')->insert(
            ['idGenere' => '4', 
            'idVideo' => '5'
            ]
        );

        DB::table('GenreXVideo')->insert(
            ['idGenere' => '4', 
            'idVideo' => '6'
            ]
        );

        //series
        DB::table('GenreXVideo')->insert(
            ['idGenere' => '1', 
            'idVideo' => '7'
            ]
        );

        DB::table('GenreXVideo')->insert(
            ['idGenere' => '3', 
            'idVideo' => '11'
            ]
        );
    }
}
