@extends('scaffold-interface.layouts.app')
@section('title','Index')
@section('content')

<section class="content">
    <h1>
        Inicio Estado_alerta
    </h1>
    <form class = 'col s3' method = 'get' action = '{!!url("estado_alerta")!!}/create'>
        <button class = 'btn btn-primary' type = 'submit'>Crear Nuevo estado_alerta</button>
    </form>
    <br>
    <br>
    <table class = "table table-striped table-bordered table-hover" style = 'background:#fff'>
        <thead>
            <th>nombre_estado_alerta</th>
            <th>acciones</th>
        </thead>
        <tbody>
            @foreach($estado_alertas as $estado_alerta) 
            <tr>
                <td>{!!$estado_alerta->nombre_estado_alerta!!}</td>
                <td>
                    <a data-toggle="modal" data-target="#myModal" class = 'delete btn btn-danger btn-xs' data-link = "/estado_alerta/{!!$estado_alerta->id!!}/deleteMsg" ><i class = 'material-icons'>eliminar</i></a>
                    <a href = '#' class = 'viewEdit btn btn-primary btn-xs' data-link = '/estado_alerta/{!!$estado_alerta->id!!}/edit'><i class = 'material-icons'>modificar</i></a>
                    <a href = '#' class = 'viewShow btn btn-warning btn-xs' data-link = '/estado_alerta/{!!$estado_alerta->id!!}'><i class = 'material-icons'>información</i></a>
                </td>
            </tr>
            @endforeach 
        </tbody>
    </table>
    {!! $estado_alertas->render() !!}

</section>
@endsection