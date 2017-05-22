@extends('scaffold-interface.layouts.app')
@section('title','Create')
@section('content')

<section class="content">
    <h1>
        Crear alerta
    </h1>
    <form method = 'get' action = '{!!url("alerta")!!}'>
        <button class = 'btn btn-success'>Inicio Alertas</button>
    </form>
    <br>
    <form method = 'POST' action = '{!!url("alerta")!!}'>
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="form-group">
            <label for="Fecha_alerta">Fecha_alerta</label>
            <input id="Fecha_alerta" name = "Fecha_alerta" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="latitud">latitud</label>
            <input id="latitud" name = "latitud" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="longitud">longitud</label>
            <input id="longitud" name = "longitud" type="text" class="form-control">
        </div>
        <button class = 'btn btn-primary' type ='submit'>Crear</button>
    </form>
</section>
@endsection