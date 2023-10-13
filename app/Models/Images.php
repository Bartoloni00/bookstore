<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    //use HasFactory; nos sirve para la carga de modelos de prueba para los seeders
    protected $table = 'images';
    protected $primaryKey = 'id';
    
}
