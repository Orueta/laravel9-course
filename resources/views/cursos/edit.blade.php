@extends('layouts.plantilla')

@section('title', 'Cursos edit')

@section('content')
    <h1>En esta página podras editar cursos</h1>
    <form action="{{ route('cursos.update', $curso) }}" method="POST">

        {{-- @csrf => Agrega un input oculto con el varlo de un token para evitar llenados malicionsos a la bd --}}
        @csrf
        {{-- Para indicarle a laravel que queremos hacer un put --}}
        @method('put')

        <label>Nombre:
            <br>
            <input type="text" name="name" value="{{ old('name', $curso->name) }}">
        </label>
        @error('name')
            <br>
            <small>*{{ $message }}</small>
            <br>
        @enderror

        <br>
        <label>Descripción
            <br>
            <textarea name="description" rows="5">{{ old('description', $curso->description) }}</textarea>
        </label>
        @error('name')
            <br>
            <small>*{{ $message }}</small>
            <br>
        @enderror

        <br>
        <label>Categoría
            <br>
            <input type="text" name="category" value="{{ old('category', $curso->category) }}">
        </label>
        @error('name')
            <br>
            <small>*{{ $message }}</small>
            <br>
        @enderror

        <br>
        <button type="submit">Actualizar formulario</button>
    </form>
@endsection
