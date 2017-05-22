@extends('scaffold-interface.layouts.app')
@section('title','Edit')
@section('content')

<section class="content">
    <h1>
        Modificar tipo_emergencia
    </h1>
    <form method = 'get' action = '{!!url("tipo_emergencia")!!}'>
        <button class = 'btn btn-danger'>Inicio tipo_emergencia</button>
    </form>
    <br>
    <form method = 'POST' action = '{!! url("tipo_emergencia")!!}/{!!$tipo_emergencia->
        id!!}/update'> 
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="form-group">
            <label for="nombre_tipo_alerta">nombre_tipo_alerta</label>
            <input id="nombre_tipo_alerta" name = "nombre_tipo_alerta" type="text" class="form-control" value="{!!$tipo_emergencia->
            nombre_tipo_alerta!!}"> 
        </div>
        <button class = 'btn btn-primary' type ='submit'>Modificar</button>
    </form>
</section>
@endsection