@extends('scaffold-interface.layouts.app')
@section('title','Edit')
@section('content')

<section class="content">
    <h1>
        Modificar clase_incendio
    </h1>
    <form method = 'get' action = '{!!url("clase_incendio")!!}'>
        <button class = 'btn btn-danger'>Inicio clase_incendio</button>
    </form>
    <br>
    <form method = 'POST' action = '{!! url("clase_incendio")!!}/{!!$clase_incendio->
        id!!}/update'> 
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="form-group">
            <label for="nombre_clase_incendio">nombre_clase_incendio</label>
            <input id="nombre_clase_incendio" name = "nombre_clase_incendio" type="text" class="form-control" value="{!!$clase_incendio->
            nombre_clase_incendio!!}"> 
        </div>
        <button class = 'btn btn-primary' type ='submit'>Modificar</button>
    </form>
</section>
@endsection