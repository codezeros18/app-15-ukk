<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert(
            [
                'id' => '1',
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('111'),
                'role' => 'admin',
            ],

    );
        DB::table('users')->insert(
            [
                'id' => '2',
                'name' => 'petugas',
                'email' => 'petugas@gmail.com',
                'password' => Hash::make('111'),
                'role' => 'petugas',
            ],
    );  
        DB::table('users')->insert(
        [
            'id' => '3',
            'name' => 'peminjam',
            'email' => 'peminjam@gmail.com',
            'password' => Hash::make('111'),
            'role' => 'peminjam',
        ],
    );
    }
}
