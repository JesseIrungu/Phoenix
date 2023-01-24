<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AdminsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([    

            'name' => 'Jesse Irungu',  
   
            'email' => 'jesseirungu3@gmail.com',   
   
            'password' => Hash::make('Kimani01'),   
   
         ]);
    }
}
