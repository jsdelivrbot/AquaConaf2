@extends('scaffold-interface.layouts.app')
@section('title','Index')
@section('content')

<section class="content">
    <h1>
        Inicio Tipo_emergencia
    </h1>
    <form class = 'col s3' method = 'get' action = '{!!url("tipo_emergencia")!!}/create'>
        <button class = 'btn btn-primary' type = 'submit'>Crear Nuevo tipo_emergencia</button>
    </form>
    <br>
    <br>
    <table class = "table table-striped table-bordered table-hover" style = 'background:#fff'>
        <thead>
            <th>nombre_tipo_alerta</th>
            <th>acciones</th>
        </thead>
        <tbody>
            @foreach($tipo_emergencias as $tipo_emergencia) 
            <tr>
                <td>{!!$tipo_emergencia->nombre_tipo_alerta!!}</td>
                <td>
                    <a data-toggle="modal" data-target="#myModal" class = 'delete btn btn-danger btn-xs' data-link = "/tipo_emergencia/{!!$tipo_emergencia->id!!}/deleteMsg" ><i class = 'material-icons'>eliminar</i></a>
                    <a href = '#' class = 'viewEdit btn btn-primary btn-xs' data-link = '/tipo_emergencia/{!!$tipo_emergencia->id!!}/edit'><i class = 'material-icons'>modificar</i></a>
                    <a href = '#' class = 'viewShow btn btn-warning btn-xs' data-link = '/tipo_emergencia/{!!$tipo_emergencia->id!!}'><i class = 'material-icons'>información</i></a>
                </td>
            </tr>
            @endforeach 
        </tbody>
    </table>
    {!! $tipo_emergencias->render() !!}

</section>
@endsection