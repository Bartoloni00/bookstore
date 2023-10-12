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
                'release_date' => '2023-10-12',
                'description' => 'Descripción de test',
                'synopsis' => 'Synopsis de test',
                'categorie_id' => 1,
                'user_id' => 1,//NO LO ENCUENTRÁ
                'image_id' => 1,
                'author_id' => 1,
            ]
        ]);
    }
}
