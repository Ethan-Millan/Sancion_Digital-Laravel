<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear sancion</title>
</head>
<body>
    <form action="{{route('sanciones.store')}}" method="POST">
        @csrf
            <select name="alumno_id" id="alumno_id">
                @foreach ($alumnos as $alumno)
                    <option value="{{$alumno->id}}">{{$alumno->matricula}}</option>
                @endforeach
            </select>

            <select name="vigilante_id" id="vigilante_id">
                @foreach ($vigilantes as $vigilante)
                    <option value="{{$vigilante->id}}">{{$vigilante->matricula}}</option>
                @endforeach
            </select>

            <select name="multa_id" id="multa_id">
                @foreach ($multas as $multa)
                    <option value="{{$multa->id}}">{{$multa->nombre_multa}}</option>
                @endforeach
            </select>

            <input type="text" name="descripcion" id="descripcion" placeholder="Descripcion de la sancion">
            <button type="submit">Registrar sanción</button>
    </form>

    <a href="{{ route('sanciones.index') }}">Volver</a>
</body>
</html>