<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'rol_id',
        'created_at',
        'updated_at'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public const CREATE_RULES = [
        'name' => ['required', 'max:100'],
        'email' => ['required'],
        'password' => ['required']
    ];

    public const CREATE_RULES_EDIT = [
        'name' => ['required', 'max:100'],
        'email' => ['required']
    ];
    
    public const ERROR_MESSAGES = [
        'name.required' => 'El nombre de usuario no puede estar vacío',
        'email.required' => 'Tienes que poseer un email.',
        'password.required' => 'El campo de la contraseña no puede estar vacio.'
    ];

    public const ERROR_MESSAGES_EDIT = [
        'name.required' => 'El nombre de usuario no puede estar vacío',
        'email.required' => 'Tienes que poseer un email.'
    ];

    public function Role()
    {
        return $this->belongsTo(Role::class, 'rol_id');
    }

    /**
     * Definimos una relacion de muchos a muchos
     */
    public function Books()//: BelongToMany
    {
        // return $this->belongsToMany(
        //     Book::class,
        //     'users_has_books',
        //     'user_id',
        //     'book_id'
        // );
        return $this->belongsToMany(Book::class,'users_has_books')->withPivot('amount');
    }
}
