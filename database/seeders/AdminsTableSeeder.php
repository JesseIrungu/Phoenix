<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            [    

'name' => 'Linus Gatungo',

'email' => 'gatungolinus55@gmail.com',   

'password' => Hash::make('Linus01'),  
],
[    

'name' => 'Sharon Mageto',  

'email' => 'shamageto@gmail.com',   

'password' => Hash::make('Sharon01'),   
]
]);
    }
}
