@extends('scaffold-interface.layouts.app')
@section('title','Show')
@section('content')

<section class="content">
    <h1>
        Mostrar clase_incendio
    </h1>
    <br>
    <form method = 'get' action = '{!!url("clase_incendio")!!}'>
        <button class = 'btn btn-primary'>Inicio clase_incendio</button>
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
                    <b><i>nombre_clase_incendio : </i></b>
                </td>
                <td>{!!$clase_incendio->nombre_clase_incendio!!}</td>
            </tr>
        </tbody>
    </table>
</section>
@endsection