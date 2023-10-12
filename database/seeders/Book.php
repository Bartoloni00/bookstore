<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Book extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('books')->insert([
            [
                'title' => 'Viaje al centro de la Tierra',
                'description' => 'Viaje al centro de la Tierra escrito por Luis Miguel',
                'price' => 1500,
                'synopsis' => 'Willy Wonka se perdió en el centro de la Tierra',
                'release_date' => '2023-10-12',
                'user_id' => 1,
                'categorie_id' => 1,
                'author_id' => 1,
                'image_id' => 1,
            ]
        ]);
    }
}
