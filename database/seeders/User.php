<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
                'password' => 'rico',
                'rol_id' => 1
            ],
            [
                'name' => 'Ezequiel',
                'email' => 'Ezequiel@protonmail.com',
                'password' => 'rico',
                'rol_id' => 1
            ]
        ]);
    }
}
