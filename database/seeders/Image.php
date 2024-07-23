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
                'name' => 'https://media.discordapp.net/attachments/1260970767932457021/1265293483372187678/viaje-al-centro-de-la-tierra.png?ex=66a0fbe2&is=669faa62&hm=bdfcaf7490a8b7dffd23799e3ed9efe18ce575095605b12165c54194385095c9&=&format=webp&quality=lossless',
                'alt' => 'Viaje-al-centro-de-la-Tierra',
            ],
            [
                'name' => 'https://media.discordapp.net/attachments/1260970767932457021/1265293482210361374/100-anos-de-soledad.png?ex=66a0fbe2&is=669faa62&hm=b81dc1f40d4dbe6b1b6c1199fa9bfaeb926fc58fed26b7efa76b60b234bbe1c1&=&format=webp&quality=lossless',
                'alt' => '100-anos-de-soledad',
            ],
            [
                'name' => 'https://media.discordapp.net/attachments/1260970767932457021/1265293482558492692/1984.png?ex=66a0fbe2&is=669faa62&hm=9e32076af2ed0cfd3909358dc11da9edddb2ac386ff20025def406c557bd0e57&=&format=webp&quality=lossless',
                'alt' => '1984-portada',
            ],
            [
                'name' => 'https://media.discordapp.net/attachments/1260970767932457021/1265293483070062716/matar-a-un-ruisenor.png?ex=66a0fbe2&is=669faa62&hm=52216461d266fa1727112c4847ecf1964c7dad74535fa61b196f9b2ed42f47f8&=&format=webp&quality=lossless',
                'alt' => 'matar-a-un-ruisenor',
            ],
            [
                'name' => 'https://media.discordapp.net/attachments/1260970767932457021/1265293482814083135/don-quijote-de-la-mancha.png?ex=66a0fbe2&is=669faa62&hm=01d743fb1571972dc508e7099e6b5661a1c46dcdb6861b7f8ca629754f98084a&=&format=webp&quality=lossless',
                'alt' => 'don-quijote-de-la-mancha',
            ],
            [
                'name' => 'https://media.discordapp.net/attachments/1195342577256374414/1195353814920871956/5.png?ex=65b3aefe&is=65a139fe&hm=a6abf1be7b0a8cee3136e16029277de5f86139fabcfbeb88e780753400d4b61e&',
                'alt' => 'senor-de-los-anillos',
            ],
            [
                'name' => 'https://media.discordapp.net/attachments/1260970767932457021/1265302593723437167/caliz-de-fuego.png?ex=66a1045e&is=669fb2de&hm=14318c31490136091cf400da1e164404e0e41206801a95a55c6aaa21609c4298&=&format=webp&quality=lossless',
                'alt' => 'harry-potter-y-el-caliz-de-fuego',
            ],
            [
                'name' => 'https://picsum.photos/320/160',
                'alt' => 'Imagen para el blog aleatoria'
            ]
        ]);
    }
}
