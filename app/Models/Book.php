<?php

namespace App\Models;

use Database\Seeders\Image;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    //use HasFactory; nos sirve para la carga de modelos de prueba para los seeders
    protected $table = 'books';
    protected $primaryKey = 'id';
    protected $name = 'name';
    protected $lastname = 'lastname';

    protected $fillable = [
        'title',
        'description',
        'price',
        'synopsis',
        'release_date',
        'categorie_id',
        'user_id',
        'author_id',
    ];

    public const CREATE_RULES = [
        'title' => ['required', 'max:100'],
        'description' => ['required'],
        'price' => ['required', 'numeric'],
        'synopsis' => ['required'],
        'release_date' => 'required',
        'categorie_id' => ['required','numeric'],
        'user_id' => ['required','numeric'],
        'author_id' => ['required','numeric']
    ];

    public const ERROR_MESSAGES = [
        'title.require' => 'El titulo no puede estar vacio',
        'description.require' => 'Tienes que escribir una descripcion.',
        'price.require' => 'El libro debe poseer un precio.',
        'synopsis.require' => 'Debes escribir un resumen de la descripcion',
        'release_date.require' => 'Debes poner la fecha de lanzamiento del libro',
        'categorie_id.require' => 'El libro tiene que poseer una categoria.',
        'author_id.require' => 'El libro tiene que poseer un autor.',
        'title.max' => 'El titulo no puede superar los :max caracteres.',
        'price.numeric' => 'El precio del libro tiene que ser numerico.',
    ];
    
    public function author()
    {
        return $this->belongsTo(Author::class, 'author_id');
    }

    public function Image()
    {
        return $this->belongsTo(Images::class, 'image_id');
    }

    public function Category()
    {
        return $this->belongsTo(Category::class, 'categorie_id');
    }

    public function User()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
