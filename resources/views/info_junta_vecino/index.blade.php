@extends('scaffold-interface.layouts.app')
@section('title','Index')
@section('content')

<section class="content">
    <h1>
        Inicio Info_junta_vecino
    </h1>
    <form class = 'col s3' method = 'get' action = '{!!url("info_junta_vecino")!!}/create'>
        <button class = 'btn btn-primary' type = 'submit'>Crear Nuevo info_junta_vecino</button>
    </form>
    <br>
    <br>
    <table class = "table table-striped table-bordered table-hover" style = 'background:#fff'>
        <thead>
            <th>nombre_encargado</th>
            <th>telefono_celular_encargado</th>
            <th>correo_electronico_encargado</th>
            <th>sector_encargado</th>
            <th>calle_pasaje_encargado</th>
            <th>villa_poblacion_encargado</th>
            <th>numero_casa_encargado</th>
            <th>actions</th>
        </thead>
        <tbody>
            @foreach($info_junta_vecinos as $info_junta_vecino) 
            <tr>
                <td>{!!$info_junta_vecino->nombre_encargado!!}</td>
                <td>{!!$info_junta_vecino->telefono_celular_encargado!!}</td>
                <td>{!!$info_junta_vecino->correo_electronico_encargado!!}</td>
                <td>{!!$info_junta_vecino->sector_encargado!!}</td>
                <td>{!!$info_junta_vecino->calle_pasaje_encargado!!}</td>
                <td>{!!$info_junta_vecino->villa_poblacion_encargado!!}</td>
                <td>{!!$info_junta_vecino->numero_casa_encargado!!}</td>
                <td>
                    <a data-toggle="modal" data-target="#myModal" class = 'delete btn btn-danger btn-xs' data-link = "/info_junta_vecino/{!!$info_junta_vecino->id!!}/deleteMsg" ><i class = 'material-icons'>eliminar</i></a>
                    <a href = '#' class = 'viewEdit btn btn-primary btn-xs' data-link = '/info_junta_vecino/{!!$info_junta_vecino->id!!}/edit'><i class = 'material-icons'>modificar</i></a>
                    <a href = '#' class = 'viewShow btn btn-warning btn-xs' data-link = '/info_junta_vecino/{!!$info_junta_vecino->id!!}'><i class = 'material-icons'>información</i></a>
                </td>
            </tr>
            @endforeach 
        </tbody>
    </table>
    {!! $info_junta_vecinos->render() !!}

</section>
@endsection