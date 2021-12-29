<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //\App\Models\User::factory(10)->create();
        $this->call(UserSeeder::class);
        $this->call(GenreSeeder::class);
        $this->call(VideoSeeder::class);
    }
}

class ProductSeeder extends Seeder
{
    public function run(){
        /*
        DB::table('user')->insert([
            'userName' => 'jgarcia', 
            'name' => 'jordi', 
            'surname' => 'garcia', 
            'mail' => 'jeguren@gmail.com',
            'password' => 'jordi',
            'birthDate' => '02/12/2000',
            'type' => 'normal',
            'block' => 'false',
            'creditCard' => 14231 ,
            'creditCardExpirationDate' => "23/12",
            'creditCardExpirationDate' => "339" ]);*/
    }
}