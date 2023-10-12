<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Author extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('authors')->insert([
            [
                'name' => 'Julio',
                'lastname' => 'Verne'
            ],
            [
                'name' => 'George',
                'lastname' => 'Orwell'
            ],
            [
                'name' => 'Aldous',
                'lastname' => 'Husley'
            ]
        ]);
    }
}
