@extends('scaffold-interface.layouts.app')
@section('title','Create')
@section('content')

<section class="content">
    <h1>
        Crear info_junta_vecino
    </h1>
    <form method = 'get' action = '{!!url("info_junta_vecino")!!}'>
        <button class = 'btn btn-danger'>Inicio info_junta_vecino</button>
    </form>
    <br>
    <form method = 'POST' action = '{!!url("info_junta_vecino")!!}'>
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="form-group">
            <label for="nombre_encargado">nombre_encargado</label>
            <input id="nombre_encargado" name = "nombre_encargado" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="telefono_celular_encargado">telefono_celular_encargado</label>
            <input id="telefono_celular_encargado" name = "telefono_celular_encargado" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="correo_electronico_encargado">correo_electronico_encargado</label>
            <input id="correo_electronico_encargado" name = "correo_electronico_encargado" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="sector_encargado">sector_encargado</label>
            <input id="sector_encargado" name = "sector_encargado" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="calle_pasaje_encargado">calle_pasaje_encargado</label>
            <input id="calle_pasaje_encargado" name = "calle_pasaje_encargado" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="villa_poblacion_encargado">villa_poblacion_encargado</label>
            <input id="villa_poblacion_encargado" name = "villa_poblacion_encargado" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="numero_casa_encargado">numero_casa_encargado</label>
            <input id="numero_casa_encargado" name = "numero_casa_encargado" type="text" class="form-control">
        </div>
        <button class = 'btn btn-primary' type ='submit'>Crear</button>
    </form>
</section>
@endsection