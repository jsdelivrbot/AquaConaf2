@extends('scaffold-interface.layouts.app')
@section('title','Show')
@section('content')

<section class="content">
    <h1>
        Mostrar bitacora_terreno
    </h1>
    <br>
    <form method = 'get' action = '{!!url("bitacora_terreno")!!}'>
        <button class = 'btn btn-primary'> Inicio bitacora_terreno</button>
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
                    <b><i>fecha_inico_terreno : </i></b>
                </td>
                <td>{!!$bitacora_terreno->fecha_inico_terreno!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>fecha_termino_terreno : </i></b>
                </td>
                <td>{!!$bitacora_terreno->fecha_termino_terreno!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>duracion_terreno : </i></b>
                </td>
                <td>{!!$bitacora_terreno->duracion_terreno!!}</td>
            </tr>
        </tbody>
    </table>
</section>
@endsection