<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCurso;

class CursoController extends Controller
{
    public function index()
    {
        // Buscar los registros de la tabla cursos por id de manera descendente
        $cursos = Curso::orderBy('id', 'desc')->paginate();

        return view('cursos.index', compact('cursos'));
    }

    public function create()
    {
        return view('cursos.create');
    }

    public function store(StoreCurso $request)
    {
        // !Crear un nuevo registro en la tabla cursos
        // $curso = new Curso();

        // $curso->name = $request->name;
        // $curso->description = $request->description;
        // $curso->category = $request->category;

        // $curso->save();

        // !Asignación masiva de datos
        // $curso = Curso::create([
        //     'name' => $request->name,
        //     'description' => $request->description,
        //     'category' => $request->category
        // ]);
        // Al aceptar un array podemos mandar el objeto request
        $curso = Curso::create($request->all());

        // Para redireccionar a una ruta luego de guardar el registro
        return redirect()->route('cursos.show', $curso->id);
    }

    public function show(Curso $curso)
    {
        // return view('cursos.show', ['curso' => $curso]);
        // Cada vez que tengamos que enviarle datos a una vista para mostrar algo o registrar algo desde la DB se  usa compact
        return view('cursos.show', compact('curso')); // devuelve un arreglo con $curso
    }

    // public function edit($id)
    public function edit(Curso $curso)
    {
        // !Forma 1 de buscar un registro
        // Buscar un registro en la tabla cursos
        // $curso = Curso::find($id);
        // return $curso;

        // !Forma 2 de buscar un registro
        /* Dentro del metodo referenciamos al modelo curso y asi laravel sabe que buscara el ide que se
        esta mandando desde la vista show */
        return view('cursos.edit', compact('curso'));
    }

    public function update(Request $request, Curso $curso)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'category' => 'required'
        ]);

        // $curso->name = $request->name;
        // $curso->description = $request->description;
        // $curso->category = $request->category;

        // $curso->save();

        $curso->update($request->all());

        return redirect()->route('cursos.show', $curso);
    }

    public function destroy(Curso $curso)
    {
        // Eliminar registro de la base de datos
        $curso->delete();

        return redirect(route('cursos.index'));
    }
}
