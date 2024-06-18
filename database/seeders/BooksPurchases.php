<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BooksPurchases extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('books_purchases')->insert([
            [
                'purchase_id' => 1,
                'book_id' => 1,
                'amount' => 1,
                'price' => 3500,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'purchase_id' => 1,
                'book_id' => 2,
                'amount' => 3,
                'price' => 1500,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'purchase_id' => 1,
                'book_id' => 3,
                'amount' => 1,
                'price' => 1250,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'purchase_id' => 2,
                'book_id' => 2,
                'amount' => 1,
                'price' => 1250,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'purchase_id' => 2,
                'book_id' => 3,
                'amount' => 3,
                'price' => 950,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'purchase_id' => 3,
                'book_id' => 1,
                'amount' => 1,
                'price' => 3500,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'purchase_id' => 3,
                'book_id' => 2,
                'amount' => 3,
                'price' => 1500,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
