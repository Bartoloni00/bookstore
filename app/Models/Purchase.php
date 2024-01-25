<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'payment_id',
        'preference_id',
        'total_price',
        'state',
        'created_at',
        'updated_at',
    ];

    public const CREATE_RULES = [
        'total_price' => ['required','numeric'],
        'state' => ['required','max:60']
    ];

    public const ERROR_MESSAGES = [
        'total_price.required' => 'La compra debe poseer el precio del total.',
        'total_price.numeric' => 'El monto de la compra tiene que estar en formato numerico.',
        'state.required' => 'El estado de la compra es obligatorio.',
        'state.max' => 'El estado no puede superar los :max caracteres.',
    ];

    public function User()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * Definimos una relacion de muchos a muchos
     */
    public function Books()
    {
        return $this->belongsToMany(Book::class,'books_purchases')->withPivot('amount','price');
    }

    protected function total_price(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $value / 100,
            set: fn ($value) => $value * 100,
        );
    }
}
