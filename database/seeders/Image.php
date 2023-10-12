<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Image extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('images')->insert([
            [
                'name' => 'Viaje-al-centro-de-la-Tierra',
                'alt' => 'Viaje-al-centro-de-la-Tierra',
            ]
        ]);
    }
}
