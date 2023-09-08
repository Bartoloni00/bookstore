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
            
            $table->id('book_id');// personalizo el nombre del id
            $table->string('title',100);
            $table->date('release_date');
            $table->text('synopsis');
            $table->unsignedInteger('price');//guardamos el precio en centavos
            // encadenamos nullable para permitir que el metodos sea null
            $table->string('cover')->nullable();
            $table->string('cover_description')->nullable();
            
            $table->timestamps();// fecha de creacion y fechade actualizacion
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movies');
    }
};
