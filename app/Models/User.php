<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

// Definicion para usar mutador
use Illuminate\Database\Eloquent\Casts\Attribute;

class User extends Authenticatable implements MustVerifyEmail
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
    ];

    // Metodo para usar mutador y accesor que cambie los registros de usuario->name a minusculas y viceversa
    protected function name(): Attribute
    {
        return new Attribute(

            // !Accesor
            // ?Funcion normal
            // get: function($value)
            // {
            //     return ucwords($value);
            // },
            // ?Funcion de flecha
            // Metodo que transforma las primeras letras en mayusculas
            get: fn($value) => ucwords($value),

            // !Mutador
            // metodo que transforma texto a minusculas
            set: fn($value) => strtolower($value),


        );
    }

     // Accesores en laravel 7<
    //  public function getNameAtribute($value)
    //  {
    //      return ucwords($value);
    //  }
    // Mutadores en laravel 7<
    //  public function setNameAtribute($value)
    //  {
    //      $this->atributes['name'] = strtolower($value);
    //  }


}
