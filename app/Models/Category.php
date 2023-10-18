<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //use HasFactory; nos sirve para la carga de modelos de prueba para los seeders
    protected $table = 'categories';
    protected $primaryKey = 'id';
    
    protected $fillable = [
        'name'
    ];

    public const CREATE_RULES = [
        'name' => ['required', 'max:45'],
    ];
    
    public const ERROR_MESSAGES = [
        'name.required' => 'El author debe poseer un nombre',
        'name.max' => 'El Nombre no puede superar los :max caracteres.'
    ];
}
