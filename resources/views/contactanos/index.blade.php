@extends('layouts.plantilla')

@section('title', 'Contactanos')

@section('content')
    <h1>Comunicate con nosotros</h1>

    <form action="{{route("contactanos.store")}}" method="POST">

        @csrf

        <label>
            Nombre:
            <br>
            <input type="text" name="nombre">
        </label>
        <br>

        @error('nombre')
            <p><strong>{{$message}} </strong></p>
        @enderror


        <label>
            Correo:
            <br>
            <input type="text" name="correo">
        </label>
        <br>

        @error('correo')
        <p><strong>{{$message}} </strong></p>
        @enderror
        
            
         <label>
            Mensaje:
            <br>
           <textarea name="mensaje" rows="4"></textarea>
        </label>
       <br>

       @error('mensaje')
       <p><strong>{{$message}} </strong></p>
       @enderror

        <button type="submit">Enviar mensaje</button>
                
    </form>

    @if (session('Validado'))
        <script>
            alert ("{{session('Validado')}}");
        </script>
    @endif

@endsection