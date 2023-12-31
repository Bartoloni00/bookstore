<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Category extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            [
                'name' => 'Ciencia Ficción',
            ],
            [
                'name' => 'Aventura',
            ],
            [
                'name' => 'Futuro Distópico',
            ],
            [
                'name' => 'Drama',
            ],
            [
                'name' => 'Terror',
            ],
            [
                'name' => 'Novela Colombiana',
            ]
        ]);
    }
}
