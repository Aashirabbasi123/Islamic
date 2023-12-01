<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class myseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       DB::table("users")->insert([
        [
            'name'=> 'admin',
            'email'=> 'admin@gmail.com',
            'password'=> hash::make('111'),
            'usertype'=> '1',
        ],
        [
            'name'=> 'user',
            'email'=> 'user@gmail.com',
            'password'=> hash::make('123'),
            'usertype'=> '0',
        ]
       ]);
    }
}
