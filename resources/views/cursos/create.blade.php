@extends('layouts.plantilla')

@section('title', 'Cursos create')

@section('content')
    <h1>En esta página podras crear cursos</h1>
    <form action="{{route('cursos.store')}}" method="POST">

        {{-- @csrf => Agrega un input oculto con el varlo de un token para evitar llenados malicionsos a la bd--}}
        @csrf
        <label>Nombre:
            <br>
            <input type="text" name="name" value="{{old('name')}}">
        </label>
        @error('name')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <br>
        <label>Descripción
            <br>
            <textarea name="description" rows="5" >{{old('description')}}</textarea>
        </label>
        @error('description')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <br>
        <label>Categoría
            <br>
            <input type="text" name="category" value="{{old('category')}}">
        </label>
        @error('category')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <br>
        <button type="submit">Enviar formulario</button>
    </form>
@endsection
