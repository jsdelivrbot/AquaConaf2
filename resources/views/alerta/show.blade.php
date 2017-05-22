@extends('scaffold-interface.layouts.app')
@section('title','Show')
@section('content')

<section class="content">
    <h1>
        Ver alerta
    </h1>
    <br>
    <form method = 'get' action = '{!!url("alerta")!!}'>
        <button class = 'btn btn-primary'>Inicio alerta </button>
    </form>
    <br>
    <table class = 'table table-bordered'>
        <thead>
            <th>Tipo</th>
            <th>Valor</th>
        </thead>
        <tbody>
            <tr>
                <td>
                    <b><i>Fecha_alerta : </i></b>
                </td>
                <td>{!!$alerta->Fecha_alerta!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>latitud : </i></b>
                </td>
                <td>{!!$alerta->latitud!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>longitud : </i></b>
                </td>
                <td>{!!$alerta->longitud!!}</td>
            </tr>
        </tbody>
    </table>
</section>
@endsection