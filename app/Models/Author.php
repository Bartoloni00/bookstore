<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    //use HasFactory; nos sirve para la carga de modelos de prueba para los seeders
    protected $table = 'authors';
    protected $primaryKey = 'id';
    
    protected $fillable = [
        'name',
        'lastname'
    ];

    public const CREATE_RULES = [
        'name' => ['required', 'max:45'],
        'lastname' => ['required', 'max:45'],
    ];
    
    public const ERROR_MESSAGES = [
        'name.required' => 'El author debe poseer un nombre',
        'lastname.required' => 'El author debe poseer un apellido.',
        'name.max' => 'El Nombre no puede superar los :max caracteres.',
        'lastname.max' => 'El Apellido no puede superar los :max caracteres.'
    ];
    
}
