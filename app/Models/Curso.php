<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    // Para definir que propiedades se aceptan desde el formulario con asigancion masiva
    // protected $fillable = ['name', 'description', 'category']; // indica que campos se permiten guardar
    protected $guarded = []; // Coloca los campos protegidos e ignora los permitidos

    // Para que el modelo Curso administre la tabla User
    // protected $table = "users";

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
