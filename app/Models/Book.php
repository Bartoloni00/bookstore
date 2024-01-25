<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
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
        'image_id',
        'author_id',
    ];

    public const CREATE_RULES = [
        'title' => ['required', 'max:100'],
        'description' => ['required'],
        'price' => ['required', 'numeric'],
        'synopsis' => ['required'],
        'release_date' => 'required',
        'categorie_id' => ['required'],
        'author_id' => ['required']
    ];
    
    public const ERROR_MESSAGES = [
        'title.required' => 'El título no puede estar vacío',
        'description.required' => 'Tienes que escribir una descripción.',
        'price.required' => 'El libro debe tener un precio.',
        'synopsis.required' => 'Debes escribir un resumen de la descripción.',
        'release_date.required' => 'Debes poner la fecha de lanzamiento del libro.',
        'categorie_id.required' => 'El libro tiene que tener una categoría.',
        'author_id.required' => 'El libro tiene que tener un autor.',
        'title.max' => 'El título no puede superar los :max caracteres.',
        'price.numeric' => 'El precio del libro tiene que ser numérico.',
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

    /**
     * Definimos una relacion de muchos a muchos
     */
    public function Users()
    {
        return $this->belongsToMany(User::class,'users_has_books')->withPivot('amount');
    }

    public function Purchases()
    {
        return $this->belongsToMany(Purchase::class,'books_purchases')->withPivot('amount','price');
    }

    protected function price(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $value / 100,
            set: fn ($value) => $value * 100,
        );
    }
}
