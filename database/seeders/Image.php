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
                'name' => 'https://cdn.discordapp.com/attachments/1195342577256374414/1195353813683544104/1.png?ex=65b3aefd&is=65a139fd&hm=b5585d670547f92aa0a1d0d8aadf933aab293b661811fd52b2fb96739611e86f&',
                'alt' => 'Viaje-al-centro-de-la-Tierra',
            ],
            [
                'name' => 'https://cdn.discordapp.com/attachments/1195342577256374414/1195353814002319400/2.png?ex=65b3aefd&is=65a139fd&hm=aac786d8ab80c0edc9394be06e62d97f7e0282fa6771b427960c9af82cd7bb73&',
                'alt' => '100-anos-de-soledad',
            ],
            [
                'name' => 'https://media.discordapp.net/attachments/1195342577256374414/1195353814300098580/3.png?ex=65b3aefd&is=65a139fd&hm=fa7f4e50797e11d8b9ab508a7d88d7c8a3d66f772ac5fb90003211f8ceeaf640&',
                'alt' => '1984-portada',
            ],
            [
                'name' => 'https://media.discordapp.net/attachments/1195342577256374414/1195353814602096671/4.png?ex=65b3aefe&is=65a139fe&hm=78c32b308878a246d30e50de64948272c2eb0897c7da76b23500ae84ede711ca&',
                'alt' => 'matar-a-un-ruisenor',
            ],
            [
                'name' => 'https://media.discordapp.net/attachments/1195342577256374414/1195353815189291098/6.png?ex=65b3aefe&is=65a139fe&hm=28c3c84b6a0e1ae8158867c77e2616800b01a69a3b1c75b801becf148c7a1ef6&',
                'alt' => 'don-quijote-de-la-mancha',
            ],
            [
                'name' => 'https://media.discordapp.net/attachments/1195342577256374414/1195353814920871956/5.png?ex=65b3aefe&is=65a139fe&hm=a6abf1be7b0a8cee3136e16029277de5f86139fabcfbeb88e780753400d4b61e&',
                'alt' => 'senor-de-los-anillos',
            ],
            [
                'name' => 'https://picsum.photos/320/160',
                'alt' => 'Imagen para el blog aleatoria'
            ]
        ]);
    }
}
