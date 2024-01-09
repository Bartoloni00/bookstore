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
        Schema::create('users_has_books', function (Blueprint $table) {
            // $table->unsignedTinyIntegrer('user_id');
            // $table->foreing('user_id')->references('id')->on('users');
            // $table->unsignedTinyIntegrer('book_id');
            // $table->foreing('book_id')->references('id')->on('books');
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('book_id')->constrained('books');
            $table->tinyInteger('amount')->default(1); // cantidad
            $table->primary(['user_id','book_id']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users_has_books');
    }
};
