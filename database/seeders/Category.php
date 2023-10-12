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
                'name' => 'Terror',
            ],
            [
                'name' => 'Ciencia Ficción',
            ],
            [
                'name' => 'Aventura',
            ],
            [
                'name' => 'Romance',
            ],
            [
                'name' => 'Futuro Distopico',
            ]
        ]);
    }
}
