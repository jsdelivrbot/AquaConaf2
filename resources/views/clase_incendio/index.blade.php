@extends('scaffold-interface.layouts.app')
@section('title','Index')
@section('content')

<section class="content">
    <h1>
        Inicio Clase_incendio
    </h1>
    <form class = 'col s3' method = 'get' action = '{!!url("clase_incendio")!!}/create'>
        <button class = 'btn btn-primary' type = 'submit'>Crear Nuevo clase_incendio</button>
    </form>
    <br>
    <br>
    <table class = "table table-striped table-bordered table-hover" style = 'background:#fff'>
        <thead>
            <th>nombre_clase_incendio</th>
            <th>acciones</th>
        </thead>
        <tbody>
            @foreach($clase_incendios as $clase_incendio) 
            <tr>
                <td>{!!$clase_incendio->nombre_clase_incendio!!}</td>
                <td>
                    <a data-toggle="modal" data-target="#myModal" class = 'delete btn btn-danger btn-xs' data-link = "/clase_incendio/{!!$clase_incendio->id!!}/deleteMsg" ><i class = 'material-icons'>eliminar</i></a>
                    <a href = '#' class = 'viewEdit btn btn-primary btn-xs' data-link = '/clase_incendio/{!!$clase_incendio->id!!}/edit'><i class = 'material-icons'>modificar</i></a>
                    <a href = '#' class = 'viewShow btn btn-warning btn-xs' data-link = '/clase_incendio/{!!$clase_incendio->id!!}'><i class = 'material-icons'>información</i></a>
                </td>
            </tr>
            @endforeach 
        </tbody>
    </table>
    {!! $clase_incendios->render() !!}

</section>
@endsection