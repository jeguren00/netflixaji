<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //genere
        DB::table('genres')->insert(['name' => 'science fiction', 
        'description' => 'https://en.wikipedia.org/wiki/Science_fiction']);
    }
}