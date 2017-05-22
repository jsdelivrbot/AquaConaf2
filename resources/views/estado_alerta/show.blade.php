@extends('scaffold-interface.layouts.app')
@section('title','Show')
@section('content')

<section class="content">
    <h1>
        Mostrar estado_alerta
    </h1>
    <br>
    <form method = 'get' action = '{!!url("estado_alerta")!!}'>
        <button class = 'btn btn-primary'> Inicio estado_alerta</button>
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
                    <b><i>nombre_estado_alerta : </i></b>
                </td>
                <td>{!!$estado_alerta->nombre_estado_alerta!!}</td>
            </tr>
        </tbody>
    </table>
</section>
@endsection