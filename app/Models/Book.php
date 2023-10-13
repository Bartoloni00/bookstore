<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    //use HasFactory; nos sirve para la carga de modelos de prueba para los seeders
    protected $table = 'books';
    protected $primaryKey = 'id';
    protected $name = 'name';
    protected $lastname = 'lastname';

    public function author()
    {
        return $this->belongsTo(Author::class, 'author_id');
    }
}
