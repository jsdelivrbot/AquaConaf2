@extends('scaffold-interface.layouts.app')
@section('title','Index')
@section('content')

<section class="content">
    <h1>
        Inicio Bitacora_terreno
    </h1>
    <form class = 'col s3' method = 'get' action = '{!!url("bitacora_terreno")!!}/create'>
        <button class = 'btn btn-primary' type = 'submit'>Crear Nueva bitacora_terreno</button>
    </form>
    <br>
    <br>
    <table class = "table table-striped table-bordered table-hover" style = 'background:#fff'>
        <thead>
            <th>fecha_inico_terreno</th>
            <th>fecha_termino_terreno</th>
            <th>duracion_terreno</th>
            <th>acciones</th>
        </thead>
        <tbody>
            @foreach($bitacora_terrenos as $bitacora_terreno) 
            <tr>
                <td>{!!$bitacora_terreno->fecha_inico_terreno!!}</td>
                <td>{!!$bitacora_terreno->fecha_termino_terreno!!}</td>
                <td>{!!$bitacora_terreno->duracion_terreno!!}</td>
                <td>
                    <a data-toggle="modal" data-target="#myModal" class = 'delete btn btn-danger btn-xs' data-link = "/bitacora_terreno/{!!$bitacora_terreno->id!!}/deleteMsg" ><i class = 'material-icons'>eliminar</i></a>
                    <a href = '#' class = 'viewEdit btn btn-primary btn-xs' data-link = '/bitacora_terreno/{!!$bitacora_terreno->id!!}/edit'><i class = 'material-icons'>modificar</i></a>
                    <a href = '#' class = 'viewShow btn btn-warning btn-xs' data-link = '/bitacora_terreno/{!!$bitacora_terreno->id!!}'><i class = 'material-icons'>información</i></a>
                </td>
            </tr>
            @endforeach 
        </tbody>
    </table>
    {!! $bitacora_terrenos->render() !!}

</section>
@endsection