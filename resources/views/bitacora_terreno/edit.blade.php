@extends('scaffold-interface.layouts.app')
@section('title','Edit')
@section('content')

<section class="content">
    <h1>
        Modificar bitacora_terreno
    </h1>
    <form method = 'get' action = '{!!url("bitacora_terreno")!!}'>
        <button class = 'btn btn-danger'> Inicio bitacora_terreno</button>
    </form>
    <br>
    <form method = 'POST' action = '{!! url("bitacora_terreno")!!}/{!!$bitacora_terreno->
        id!!}/update'> 
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="form-group">
            <label for="fecha_inico_terreno">fecha_inico_terreno</label>
            <input id="fecha_inico_terreno" name = "fecha_inico_terreno" type="text" class="form-control" value="{!!$bitacora_terreno->
            fecha_inico_terreno!!}"> 
        </div>
        <div class="form-group">
            <label for="fecha_termino_terreno">fecha_termino_terreno</label>
            <input id="fecha_termino_terreno" name = "fecha_termino_terreno" type="text" class="form-control" value="{!!$bitacora_terreno->
            fecha_termino_terreno!!}"> 
        </div>
        <div class="form-group">
            <label for="duracion_terreno">duracion_terreno</label>
            <input id="duracion_terreno" name = "duracion_terreno" type="text" class="form-control" value="{!!$bitacora_terreno->
            duracion_terreno!!}"> 
        </div>
        <button class = 'btn btn-primary' type ='submit'>Modificar</button>
    </form>
</section>
@endsection