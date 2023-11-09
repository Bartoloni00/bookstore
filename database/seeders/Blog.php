<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Blog extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('blogs')->insert([
            [
                'title' => 'Novedades',
                'release_date' => now(),
                'description' => 'Descripción de test',
                'synopsis' => 'Synopsis de test',
                'categorie_id' => 1,
                'user_id' => 1,
                'image_id' => 7,
            ]
        ]);
    }
}
