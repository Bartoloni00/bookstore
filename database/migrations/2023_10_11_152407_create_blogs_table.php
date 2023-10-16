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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id(); // Personalizaste el nombre del id
            $table->string('title');
            $table->date('release_date');
            $table->text('description');
            $table->text('synopsis');
            $table->foreignId('categorie_id')->constrained('categories');
            $table->foreignId('user_id')->constrained('users');// contrained busca automaticamente la columna para referencia el fk, reference es mas manual.
            $table->foreignId('image_id')->nullable()->constrained('images'); // Utilizamos nullable para permitir valores nulos
            $table->foreignId('author_id')->constrained('authors');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
