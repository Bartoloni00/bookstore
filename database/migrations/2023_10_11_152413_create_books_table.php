<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id(); // Personalizaste el nombre del id
            $table->string('title', 100);
            $table->date('release_date');
            $table->text('description');
            $table->text('synopsis');
            $table->unsignedInteger('price'); // Guardamos el precio en centavos
            $table->foreignId('user_id')->constrained('users')->default(1); // Utilizamos foreignId y constrained para definir la relación
            $table->foreignId('categorie_id')->constrained('categories');
            $table->foreignId('author_id')->constrained('authors');
            $table->foreignId('image_id')->nullable()->constrained('images'); // Utilizamos nullable para permitir valores nulos
            $table->timestamps(); // Fecha de creación y fecha de actualización
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
