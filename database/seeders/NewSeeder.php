<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('news')->insert([
            [
                'title' => 'Nuevo Lanzamiento',
                'description' => 'Nuevo Lanzamiento',
                'synopsis' => 'Nuevo Lanzamiento',
                'date' => now(),
                'user_id' => 1,
                'image_id' => 1,
                'categorie_id' => 1,
            ]
        ]);
    }
}
