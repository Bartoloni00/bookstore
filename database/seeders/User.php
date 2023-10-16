<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class User extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Abraham',
                'email' => 'Abraham@gmail.com',
                'password' => Hash::make('rico'),
                'rol_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Ezequiel',
                'email' => 'Ezequiel@protonmail.com',
                'password' => Hash::make('rico'),
                'rol_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
