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
                'title' => 'Rebelión en la granja, una sátira con animales',
                'release_date' => now(),
                'description' => 'Rebelión en la granja fue publicado en agosto de 1945, ya sobre el final de la Segunda Guerra Mundial. Se trata de una sátira donde Orwell describe en forma burlona el régimen stalinista. Sin embargo, el retrato que hace es tan claro y contundente que puede aplicarse a cualquier tipo de totalitarismo.

                El argumento principal de esta novela es que los animales de la granja de Howard Jones deciden realizar una revolución, echando al dueño e independizándose de los humanos.
                
                La revolución triunfa y la nueva Granja Animal obtiene su soberanía. Dentro del grupo de animales, los cerdos son los que toman las decisiones, mientras que los demás animales los apoyan. De todos los cerdos hay dos que sobresalen y son los grandes líderes: Snowball y Napoleón. Pero no todo parece estar bien entre ellos.
                
                Al cabo de un tiempo todo se empieza a complicar en la granja. Los cerdos comienzan a manipular al resto de los animales y asignarse privilegios. Poco a poco lo que parecía una república democrática se va convirtiendo cada vez más en una dictadura.
                
                En esta historia, cada animal representa a un actor diferente de la sociedad y se muestra como padecen la transformación del entorno en el que viven. Las lecciones de Rebelión en la Granja
                Lo mejor que tiene este libro son las lecciones que deja. Las maniobras que ejecuta Napoleón, las decisiones que toma, las excusas que pone en cada caso, son siempre las que usan los totalitarismos.
                
                En ese sentido, es fácil identificar cuándo una república democrática empieza a transitar el oscuro camino hacia una dictadura.
                
                Orwell describe muchas situaciones que claramente están basadas en hechos. Desde la supuesta traición de Snowball, la censura impuesta por Napoleón y hasta el destino final de Boxer, el caballo.',
                'synopsis' => 'En este artículo voy a presentarte uno de esos libros indispensables que toda biblioteca debe tener. Me refiero a Rebelión en la Granja, de George Orwell.
                Ya hemos conocido otro libro de Orwell en Mentes Liberadas. Su obra más conocida: 1984. Te dejo el enlace a la reseña de ese gran libro: 1984, la gran distopía de George Orwell.',
                'categorie_id' => 1,
                'user_id' => 1,
                'image_id' => 7,
            ]
        ]);
    }
}
