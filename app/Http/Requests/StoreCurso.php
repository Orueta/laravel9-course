<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCurso extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            // Validaciones de los campos para evitar errores de sql
            'name' => 'required|max:10',
            'description' => 'required|min:10',
            'category' => 'required'
        ];
    }

    // Personalizar los mensajes de error
    public function attributes()
    {
        return [
            'name' => 'nombre del curso',
        ];
    }

    // Personalizar mensajes de las reglas de validación
    public function messages()
    {
        return [
            'description.required' => 'Debe ingresar una descripciónn del curso'
        ];
    }
}
