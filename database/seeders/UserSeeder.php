<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
        DB::table('users')->insert([
            'userName' => 'jgarcia',
        'name' => 'jordi', 
        'surname' => 'garcia', 
        'email' => 'jeguren@gmail.com',
        'password' => Hash::make('jordi'),
        // 'birthDate' => now(),
        // 'type' => 'normal',
        'block' => false,
        'creditCard' => 14231 ,
        'creditCardExpirationDate' => '23/12',
        'creditCardCVV' => '339' ]);

        DB::table('users')->insert([
            'userName' => 'acuesta',
        'name' => 'adan', 
        'surname' => 'cuesta', 
        'email' => 'acuesta@gmail.com',
        'password' => Hash::make('adan'),
        // 'birthDate' => now(),
        // 'type' => 'normal',
        'block' => false,
        'creditCard' => 14231 ,
        'creditCardExpirationDate' => '23/12',
        'creditCardCVV' => '339' ]);

        DB::table('users')->insert([
            'userName' => 'ibrugada',
        'name' => 'ignasi', 
         'surname' => 'brugada', 
        'email' => 'ibrugada@gmail.com',
        'password' => Hash::make('ignasi'),
        // 'birthDate' => now(),
        'block' => false,
        'creditCard' => 14231 ,
        'creditCardExpirationDate' => '23/12',
        'creditCardCVV' => '339' ]);

        DB::table('users')->insert([
            'userName' => 'admin',
        'name' => 'admin', 
        'surname' => 'admin', 
        'email' => 'admin@admin.com',
        'password' => Hash::make('admin'),
        'block' => false,
        'creditCard' => 14231 ,
        'creditCardExpirationDate' => '23/12',
        'type' => 'admin',
        'creditCardCVV' => '339' ]);
    }
}
