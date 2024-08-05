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
                'name' => 'seedImages/viajeAlCentroDeLaTierra.png',
                'alt' => 'Viaje-al-centro-de-la-Tierra',
            ],
            [
                'name' => 'seedImages/100anosDeSoledad.JPG',
                'alt' => '100-anos-de-soledad',
            ],
            [
                'name' => 'seedImages/1984_poster-805724437.jpg',
                'alt' => '1984-portada',
            ],
            [
                'name' => 'seedImages/matarAUnRuisenor.jpg',
                'alt' => 'matar-a-un-ruisenor',
            ],
            [
                'name' => 'seedImages/donquijotedelamancha.jpg',
                'alt' => 'don-quijote-de-la-mancha',
            ],
            [
                'name' => 'seedImages/elsenordelosanillos.jpg',
                'alt' => 'senor-de-los-anillos',
            ],
            [
                'name' => 'https://picsum.photos/320/160',
                'alt' => 'Imagen para el blog aleatoria'
            ]
        ]);
    }
}
