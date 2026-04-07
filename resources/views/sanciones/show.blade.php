@extends('layouts.app')

@section('content')

    <table border="1">
        <tr>
            <th>Alumno</th>
            <th>Matricula alumno</th>
            <th>Vigilante</th>
            <th>Matricula vigilante</th>
            <th>Multa</th>
            <th>Descripcion</th>
            <th>Saldada</th>
            <th>Horas</th>
        </tr>
            @if ($sancion)
                

                

            <tr>
                <td>{{ $sancion->alumno->nombre }}</td>
                <td>{{ $sancion->alumno->matricula}}</td>
                <td>{{ $sancion->vigilante->nombre}}</td>
                <td>{{ $sancion->vigilante->matricula}}</td>
                <td>{{ $sancion->multa->nombre_multa}}</td>
                <td>{{ $sancion->descripcion}}</td>
                <td>{{ ($sancion->pagada) ? "SI" : "NO"}}</td>
                <td>{{ $sancion->multa->hora_infraccion}}</td>
            </tr>
            @else
            <tr>
                <td colspan="8">No hay registros que mostrar</td>
            </tr>
            @endif
    </table>

    <a href="{{ route('sanciones.index') }}" class="btn-navegacion">Volver a la lista</a>

@endsection