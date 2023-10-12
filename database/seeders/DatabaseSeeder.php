<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //invoco los seeders que quiero ejecutar, en el orden que necesitamos
        $this->call(Rol::class);
        $this->call(Image::class);
        $this->call(Author::class);
        $this->call(Category::class);
        $this->call(User::class);
        $this->call(NewSeeder::class);
        $this->call(Blog::class);
        $this->call(Book::class);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
