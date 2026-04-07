<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sanciones</title>
</head>
<body>
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
    
        @forelse($sanciones as $sancion)
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
        @empty
            <tr>
                <td colspan="8">No hay registros que mostrar</td>
            </tr>
        @endforelse
    </table>

    <a href="{{ route('sanciones.create')}}" class="btn-navegacion">Crear sanción</a>
</body>
</html>