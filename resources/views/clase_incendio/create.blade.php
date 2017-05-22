@extends('scaffold-interface.layouts.app')
@section('title','Create')
@section('content')

<section class="content">
    <h1>
        Crear clase_incendio
    </h1>
    <form method = 'get' action = '{!!url("clase_incendio")!!}'>
        <button class = 'btn btn-danger'>Inicio clase_incendio</button>
    </form>
    <br>
    <form method = 'POST' action = '{!!url("clase_incendio")!!}'>
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="form-group">
            <label for="nombre_clase_incendio">nombre_clase_incendio</label>
            <input id="nombre_clase_incendio" name = "nombre_clase_incendio" type="text" class="form-control">
        </div>
        <button class = 'btn btn-primary' type ='submit'>Crear</button>
    </form>
</section>
@endsection