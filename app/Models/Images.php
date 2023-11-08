<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    //use HasFactory; nos sirve para la carga de modelos de prueba para los seeders
    protected $table = 'images';
    protected $primaryKey = 'id';
    
    protected $fillable = [
        'name',
        'alt'
    ];

    public const CREATE_RULES = [
        'name' => ['required'],
        'alt' => ['required']
    ];

    public const ERROR_MESSAGES = [
        'name.require' => 'Debe poseer una imagen',
        'alt.require' => 'La imagen debe poseer una descripcion.'
    ];
}
