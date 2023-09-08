<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('books')->insert([
            [
                'book_id' => 1,
                'title' => '1984',
                'release_date' => '1964-12-12',
                'synopsis' => 'Una persona quiere destruir el orden de una sociedad',
                'price' => 1500,
                // 'cover' => null,
                // 'cover_description' => null,
                'created_at'=>now(),//now retorna la fecha y hora actual
                'updated_at'=>now()
            ],
            [
                'book_id' => 2,
                'title' => '12 reglas para vivir',
                'release_date' => '2015-12-12',
                'synopsis' => '12 reglas para vivir sin causar un caos',
                'price' => 2500,
                // 'cover' => null,
                // 'cover_description' => null,
                'created_at'=>now(),//now retorna la fecha y hora actual
                'updated_at'=>now()
            ],
            [
                'book_id' => 3,
                'title' => 'Como ganar amigos e influir en las personas',
                'release_date' => '1922-12-12',
                'synopsis' => 'Tutorial de como ser un ser humano',
                'price' => 800,
                // 'cover' => null,
                // 'cover_description' => null,
                'created_at'=>now(),//now retorna la fecha y hora actual
                'updated_at'=>now()
            ],
            [
                'book_id' => 4,
                'title' => 'La accion humana',
                'release_date' => '1943-12-12',
                'synopsis' => 'La importancia de la economia en las deciciones de las personas',
                'price' => 3000,
                // 'cover' => null,
                // 'cover_description' => null,
                'created_at'=>now(),//now retorna la fecha y hora actual
                'updated_at'=>now()
            ],
        ]);
    }
}
