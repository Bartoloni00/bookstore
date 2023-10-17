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
        Schema::create('news', function (Blueprint $table) {
            $table->id(); // Personalizaste el nombre del id
            $table->string('title');
            $table->text('description');
            $table->text('synopsis');
            $table->dateTime('date');
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('image_id')->nullable()->constrained('images');
            $table->foreignId('categorie_id')->constrained('categories');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news');
    }
};
