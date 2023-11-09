<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    //use HasFactory; nos sirve para la carga de modelos de prueba para los seeders
    protected $table = 'blogs';
    protected $primaryKey = 'id';

    protected $fillable = [
        'title',
        'description',
        'synopsis',
        'release_date',
        'user_id',
        'categorie_id',
        'image_id'
    ];

    public const CREATE_RULES = [
        'title' => ['required', 'max:100'],
        'description' => ['required'],
        'synopsis' => ['required'],
        'categorie_id' => ['required'],
    ];
    
    public const ERROR_MESSAGES = [
        'title.required' => 'El título no puede estar vacío',
        'description.required' => 'Tienes que escribir una descripción.',
        'synopsis.required' => 'Debes escribir un resumen de la descripción.',
        'categorie_id.required' => 'El libro tiene que tener una categoría.',
    ];

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
