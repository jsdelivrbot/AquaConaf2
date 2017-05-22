@extends('scaffold-interface.layouts.app')
@section('title','Edit')
@section('content')

<section class="content">
    <h1>
        Modificar estado_alerta
    </h1>
    <form method = 'get' action = '{!!url("estado_alerta")!!}'>
        <button class = 'btn btn-danger'>Inicio estado_alerta</button>
    </form>
    <br>
    <form method = 'POST' action = '{!! url("estado_alerta")!!}/{!!$estado_alerta->
        id!!}/update'> 
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="form-group">
            <label for="nombre_estado_alerta">nombre_estado_alerta</label>
            <input id="nombre_estado_alerta" name = "nombre_estado_alerta" type="text" class="form-control" value="{!!$estado_alerta->
            nombre_estado_alerta!!}"> 
        </div>
        <button class = 'btn btn-primary' type ='submit'>Modificar</button>
    </form>
</section>
@endsection