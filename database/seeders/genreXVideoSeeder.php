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
        //black mirror
        DB::table('GenreXVideo')->insert(
            ['idGenere' => '1', 
            'idVideo' => '5'
            ]
        );
    }
}
