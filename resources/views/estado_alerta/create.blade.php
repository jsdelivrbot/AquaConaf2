@extends('scaffold-interface.layouts.app')
@section('title','Create')
@section('content')

<section class="content">
    <h1>
        Crear estado_alerta
    </h1>
    <form method = 'get' action = '{!!url("estado_alerta")!!}'>
        <button class = 'btn btn-danger'>Inicio estado_alerta</button>
    </form>
    <br>
    <form method = 'POST' action = '{!!url("estado_alerta")!!}'>
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="form-group">
            <label for="nombre_estado_alerta">nombre_estado_alerta</label>
            <input id="nombre_estado_alerta" name = "nombre_estado_alerta" type="text" class="form-control">
        </div>
        <button class = 'btn btn-primary' type ='submit'>Crear</button>
    </form>
</section>
@endsection