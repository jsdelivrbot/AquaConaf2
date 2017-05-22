@extends('scaffold-interface.layouts.app')
@section('title','Show')
@section('content')

<section class="content">
    <h1>
        Mostrar tipo_emergencia
    </h1>
    <br>
    <form method = 'get' action = '{!!url("tipo_emergencia")!!}'>
        <button class = 'btn btn-primary'>Inicio tipo_emergencia</button>
    </form>
    <br>
    <table class = 'table table-bordered'>
        <thead>
            <th>Dato</th>
            <th>Valor</th>
        </thead>
        <tbody>
            <tr>
                <td>
                    <b><i>nombre_tipo_alerta : </i></b>
                </td>
                <td>{!!$tipo_emergencia->nombre_tipo_alerta!!}</td>
            </tr>
        </tbody>
    </table>
</section>
@endsection