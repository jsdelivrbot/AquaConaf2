@extends('scaffold-interface.layouts.app')
@section('title','Show')
@section('content')

<section class="content">
    <h1>
        Mostrar info_junta_vecino
    </h1>
    <br>
    <form method = 'get' action = '{!!url("info_junta_vecino")!!}'>
        <button class = 'btn btn-primary'>Inicio info_junta_vecino</button>
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
                    <b><i>nombre_encargado : </i></b>
                </td>
                <td>{!!$info_junta_vecino->nombre_encargado!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>telefono_celular_encargado : </i></b>
                </td>
                <td>{!!$info_junta_vecino->telefono_celular_encargado!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>correo_electronico_encargado : </i></b>
                </td>
                <td>{!!$info_junta_vecino->correo_electronico_encargado!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>sector_encargado : </i></b>
                </td>
                <td>{!!$info_junta_vecino->sector_encargado!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>calle_pasaje_encargado : </i></b>
                </td>
                <td>{!!$info_junta_vecino->calle_pasaje_encargado!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>villa_poblacion_encargado : </i></b>
                </td>
                <td>{!!$info_junta_vecino->villa_poblacion_encargado!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>numero_casa_encargado : </i></b>
                </td>
                <td>{!!$info_junta_vecino->numero_casa_encargado!!}</td>
            </tr>
        </tbody>
    </table>
</section>
@endsection