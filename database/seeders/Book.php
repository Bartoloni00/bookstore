<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Book extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('books')->insert([
            [
                'title' => 'Viaje al centro de la Tierra',
                'description' => 'Es una emocionante novela de ciencia ficción y aventuras que narra la historia del profesor Lidenbrock y su sobrino Axel, quienes emprenden una audaz expedición para explorar el interior de la Tierra. Descienden por un cráter volcánico en Islandia y se aventuran en un mundo subterráneo lleno de misterios geológicos, criaturas prehistóricas y paisajes asombrosos.',
                'price' => 3500,
                'synopsis' => 'El profesor Lidenbrock descubre un mensaje encriptado que promete una ruta hacia el centro de la Tierra. Junto a su sobrino, se embarcan en una audaz expedición descendiendo por un cráter volcánico en Islandia.',
                'release_date' => '1864-11-25',
                'user_id' => 1,
                'categorie_id' => 1,
                'author_id' => 1,
                'image_id' => 1
            ],
            [
                'title' => 'Cien años de soledad',
                'description' => 'Una obra maestra de la literatura latinoamericana que narra la historia de la familia Buendía en el pueblo ficticio de Macondo. La novela combina elementos de realismo mágico con una narrativa envolvente que explora temas de amor, soledad y destino. A lo largo de siete generaciones, los personajes de la familia Buendía se ven envueltos en episodios extraordinarios y eventos sobrenaturales que desafían la imaginación. Una lectura obligada para amantes de la literatura.',
                'price' => 1500,
                'synopsis' => 'La novela combina elementos de realismo mágico con una narrativa envolvente que explora temas de amor, soledad y destino.',
                'release_date' => '1967-05-30',
                'user_id' => 1,
                'categorie_id' => 2,
                'author_id' => 2,
                'image_id' => 2
            ],
            [
                'title' => '1984',
                'description' => 'Una distopía clásica de George Orwell que presenta un mundo totalitario bajo el control del Gran Hermano. La novela reflexiona sobre la vigilancia estatal, la manipulación de la verdad y la lucha por la libertad individual. A través de la historia de Winston Smith, el lector es transportado a un futuro sombrío y opresivo donde la privacidad y la libertad son inexistentes. Una obra que sigue siendo relevante en el mundo actual.',
                'price' => 1250,
                'synopsis' => 'La novela reflexiona sobre la vigilancia estatal, la manipulación de la verdad y la lucha por la libertad individual.',
                'release_date' => '1949-10-21',
                'user_id' => 1,
                'categorie_id' => 1,
                'author_id' => 3,
                'image_id' => 3
            ],
            [
                'title' => 'Matar a un ruiseñor',
                'description' => 'Una obra clásica de Harper Lee que aborda temas de racismo y justicia en el sur de Estados Unidos. La historia se centra en la defensa legal de un hombre afroamericano acusado de violar a una mujer blanca y las lecciones de moralidad impartidas por el abogado Atticus Finch a sus hijos. Una narrativa conmovedora que pone de manifiesto los desafíos de la igualdad y la comprensión en una sociedad dividida.',
                'price' => 1425,
                'synopsis' => 'La historia se centra en la defensa legal de un hombre afroamericano acusado de violar a una mujer blanca y las lecciones de moralidad impartidas por el abogado Atticus Finch a sus hijos.',
                'release_date' => '1960-07-11',
                'user_id' => 1,
                'categorie_id' => 1,
                'author_id' => 4,
                'image_id' => 4
            ],
            [
                'title'=> 'Don Quijote de la Mancha',
                'description'=> 'La obra maestra de Miguel de Cervantes que sigue las aventuras del caballero Don Quijote y su fiel escudero Sancho Panza. La novela es un hito en la literatura española y mundial, mezclando comedia y sátira con exploraciones de la locura y la realidad. Un relato atemporal que celebra la imaginación y la búsqueda de ideales.',
                'price'=> 1600,
                'synopsis'=> 'La novela es un hito en la literatura española y mundial, mezclando comedia y sátira con exploraciones de la locura y la realidad.',
                'release_date'=> '1605-01-16',
                'user_id'=> 1,
                'categorie_id'=> 1,
                'author_id'=> 5,
                'image_id' => 5
            ],
            [
                'title' => 'El Señor de los Anillos',
                'description' => 'La trilogía épica de J.R.R. Tolkien que narra la lucha entre el bien y el mal en la Tierra Media. La narrativa detallada y la creación de un mundo ficticio hacen de esta serie un hito en la literatura de fantasía. A través de la travesía de Frodo Bolsón y su misión de destruir el Anillo Único, la obra aborda temas de coraje y camaradería en un mundo lleno de peligros y maravillas.',
                'price' => 1650,
                'synopsis' => 'La narrativa detallada y la creación de un mundo ficticio hacen de esta serie un hito en la literatura de fantasía.',
                'release_date' => '1954-07-29',
                'user_id' => 1,
                'categorie_id' => 1,
                'author_id' => 6,
                'image_id' => 6
            ]
        ]);
    }
}
