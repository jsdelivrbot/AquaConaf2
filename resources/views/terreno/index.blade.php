@extends('scaffold-interface.layouts.app')
@section('title','Index')
@section('content')

<section class="content">
    <h1>
        Iniico Terreno
    </h1>
    <form class = 'col s3' method = 'get' action = '{!!url("terreno")!!}/create'>
        <button class = 'btn btn-primary' type = 'submit'>Crear Nuevo terreno</button>
    </form>
    <br>
    <br>
    <table class = "table table-striped table-bordered table-hover" style = 'background:#fff'>
        <thead>
            <th>acciones</th>
        </thead>
        <tbody>
            @foreach($terrenos as $terreno) 
            <tr>
                <td>
                    <a data-toggle="modal" data-target="#myModal" class = 'delete btn btn-danger btn-xs' data-link = "/terreno/{!!$terreno->id!!}/deleteMsg" ><i class = 'material-icons'>eliminar</i></a>
                    <a href = '#' class = 'viewEdit btn btn-primary btn-xs' data-link = '/terreno/{!!$terreno->id!!}/edit'><i class = 'material-icons'>modificar</i></a>
                    <a href = '#' class = 'viewShow btn btn-warning btn-xs' data-link = '/terreno/{!!$terreno->id!!}'><i class = 'material-icons'>información</i></a>
                </td>
            </tr>
            @endforeach 
        </tbody>
    </table>
    {!! $terrenos->render() !!}

</section>
@endsection