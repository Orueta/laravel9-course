<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
// Indicamos el modelo al que queremos llenar de datos falsos
use App\Models\Curso;

class CursoFactory extends Factory
{
    //  Indicamos el modelo que se va a cargar
    protected $model = Curso::class;

    public function definition()
    {
        $name = $this->faker->sentence();

        // Llenado de datos falsos con faker
        return [
            'name' => $name,
            'slug' => Str::slug($name, '-'),
            'description' => $this->faker->paragraph(),
            'category' => $this->faker->randomElement(['Desarrollo web', 'Diseño web'])
        ];
    }
}
