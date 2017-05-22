@extends('scaffold-interface.layouts.app')
@section('title','Index')
@section('content')

<section class="content">
    <h1>
        Inicio Alerta
    </h1>
    <form class = 'col s3' method = 'get' action = '{!!url("alerta")!!}/create'>
        <button class = 'btn btn-primary' type = 'submit'>Crear Nueva alerta</button>
    </form>
    <br>
    <br>
    <table class = "table table-striped table-bordered table-hover" style = 'background:#fff'>
        <thead>
            <th>Fecha_alerta</th>
            <th>latitud</th>
            <th>longitud</th>
            <th>actions</th>
        </thead>
        <tbody>
            @foreach($alertas as $alerta) 
            <tr>
                <td>{!!$alerta->Fecha_alerta!!}</td>
                <td>{!!$alerta->latitud!!}</td>
                <td>{!!$alerta->longitud!!}</td>
                <td>
                    <a data-toggle="modal" data-target="#myModal" class = 'delete btn btn-danger btn-xs' data-link = "/alerta/{!!$alerta->id!!}/deleteMsg" ><i class = 'material-icons'>Eliminar</i></a>
                    <a href = '#' class = 'viewEdit btn btn-primary btn-xs' data-link = '/alerta/{!!$alerta->id!!}/edit'><i class = 'material-icons'>Modificar</i></a>
                    <a href = '#' class = 'viewShow btn btn-warning btn-xs' data-link = '/alerta/{!!$alerta->id!!}'><i class = 'material-icons'>info</i></a>
                </td>
            </tr>
            @endforeach 
        </tbody>
    </table>
    {!! $alertas->render() !!}

</section>
@endsection