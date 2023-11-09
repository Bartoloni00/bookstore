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
                'name' => 'https://i.imgur.com/KJjQ0df.jpg',
                'alt' => 'Viaje-al-centro-de-la-Tierra',
            ],
            [
                'name' => 'https://i.imgur.com/qUPgtJj.jpg',
                'alt' => '100-años-de-soledad',
            ],
            [
                'name' => 'https://i.imgur.com/bLeTZBy.jpg',
                'alt' => '1984-portada',
            ],
            [
                'name' => 'https://i.imgur.com/8MQESyf.jpg',
                'alt' => 'matar-al-bicho',
            ],
            [
                'name' => 'https://i.imgur.com/6sfixY2.jpg',
                'alt' => 'don-quijote-de-la-mancha',
            ],
            [
                'name' => 'https://i.imgur.com/9nPhS5a.jpg',
                'alt' => 'senor-de-los-anillos',
            ],
            [
                'name' => 'https://picsum.photos/320/160',
                'alt' => 'Imagen para el blog aleatoria'
            ]
        ]);
    }
}
