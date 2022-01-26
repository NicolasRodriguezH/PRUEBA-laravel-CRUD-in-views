@extends('layouts.plantilla')

@section('title', 'Cursos editatelo')

@section('content')
    <h1>En esta pagina podreas Editar un curso</h1>

    <form action="{{ route('cursos.update', $curso) }}" method="POST">

        @csrf

        @method('PUT')

        <label>
            Nombre:
            <br>
            <input type="text" name="name" value="{{old('name', $curso->name)}}">
        </label>

        @error('name')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <input type="hidden" name="slug" value="slug">
        @error('slug')
        <br>
        <small>*{{$message}}</small>
        <br>
        @enderror

        <br>
        <label>
            Descripcion:
            <br>
            <textarea name="descripcion" rows="5"> {{old('descripcion', $curso->descripcion)}} </textarea>
        </label>

        @error('descripcion')
        <br>
        <small>*{{$message}}</small>
        <br>
        @enderror

        <br>
        <label>
            Categoria:
            <br>
            <input type="text" name="categoria" value="{{old('categoria', $curso->categoria)}}">
        </label>

        @error('categoria')
        <br>
        <small>*{{$message}}</small>
        <br>
        @enderror

        <br>
        <br>
        <button type="submit">Actualizar</button>
    </form>
@endsection