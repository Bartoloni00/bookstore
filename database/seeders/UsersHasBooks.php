<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersHasBooks extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users_has_books')->insert([
            [
                'user_id' => 3,
                'book_id' => 1,
                'amount' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'user_id' => 3,
                'book_id' => 2,
                'amount' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'user_id' => 3,
                'book_id' => 3,
                'amount' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
