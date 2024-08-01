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
                'name' => 'https://media.discordapp.net/attachments/1260970767932457021/1268667786113187860/viajeAlCentroDeLaTierra.png?ex=66ad4272&is=66abf0f2&hm=942146d6a51aadee1bf863140fea0605410ca0b137f57ebdb7414691ee161483&=&format=webp&quality=lossless',
                'alt' => 'Viaje-al-centro-de-la-Tierra',
            ],
            [
                'name' => 'https://media.discordapp.net/attachments/1260970767932457021/1268667786780213389/100anosDeSoledad.JPG?ex=66ad4273&is=66abf0f3&hm=e426ceb4468bd3f76eb2ef628b14b19b079c2b64cb044b9004b90a0c731a1a29&=&format=webp',
                'alt' => '100-anos-de-soledad',
            ],
            [
                'name' => 'https://media.discordapp.net/attachments/1260970767932457021/1268667787249717268/1984_poster-805724437.jpg?ex=66ad4273&is=66abf0f3&hm=5bf572b3bf96a851506910fb9ab7294d1bdf2d9256131cf0509d87a112473a4b&=&format=webp',
                'alt' => '1984-portada',
            ],
            [
                'name' => 'https://media.discordapp.net/attachments/1260970767932457021/1268667786394079343/matarAUnRuisenor.jpg?ex=66ad4272&is=66abf0f2&hm=34f51ddcb5a3f794e69a1c6901fd468c2666c2ea259491a21ea2b65aa5fea5a2&=&format=webp',
                'alt' => 'matar-a-un-ruisenor',
            ],
            [
                'name' => 'https://media.discordapp.net/attachments/1260970767932457021/1268667786985738291/donquijotedelamancha.jpg?ex=66ad4273&is=66abf0f3&hm=d6c9dc1ba3ad450abba3e18fcfbde49a407ed9d5236047a1970b6f0e844b6171&=&format=webp',
                'alt' => 'don-quijote-de-la-mancha',
            ],
            [
                'name' => 'https://media.discordapp.net/attachments/1260970767932457021/1268667785806876733/elsenordelosanillos.jpg?ex=66ad4272&is=66abf0f2&hm=264a927d58abd7bc5dcc53bc42916e66e16bb6c2bfaca4dfa258057f49615f2c&=&format=webp',
                'alt' => 'senor-de-los-anillos',
            ],
            [
                'name' => 'https://picsum.photos/320/160',
                'alt' => 'Imagen para el blog aleatoria'
            ]
        ]);
    }
}
