@extends('scaffold-interface.layouts.app')
@section('title','Edit')
@section('content')

<section class="content">
    <h1>
        Modificar Alerta
    </h1>
    <form method = 'get' action = '{!!url("alerta")!!}'>
        <button class = 'btn btn-success'>Inicio alerta</button>
    </form>
    <br>
    <form method = 'POST' action = '{!! url("alerta")!!}/{!!$alerta->
        id!!}/update'> 
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="form-group">
            <label for="Fecha_alerta">Fecha_alerta</label>
            <input id="Fecha_alerta" name = "Fecha_alerta" type="text" class="form-control" value="{!!$alerta->
            Fecha_alerta!!}"> 
        </div>
        <div class="form-group">
            <label for="latitud">latitud</label>
            <input id="latitud" name = "latitud" type="text" class="form-control" value="{!!$alerta->
            latitud!!}"> 
        </div>
        <div class="form-group">
            <label for="longitud">longitud</label>
            <input id="longitud" name = "longitud" type="text" class="form-control" value="{!!$alerta->
            longitud!!}"> 
        </div>
        <button class = 'btn btn-primary' type ='submit'>Modificar</button>
    </form>
</section>
@endsection