<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// import the Intervention Image Manager Class
use Intervention\Image\ImageManagerStatic as Image;

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

    public static function manipularImg (string $img, int $high, int $width){
        Image::make(storage_path('app/public/'.$img))
        ->fit( $width,$high, function($constraint){
            $constraint->upsize();
        })
        ->save();
    }
}
