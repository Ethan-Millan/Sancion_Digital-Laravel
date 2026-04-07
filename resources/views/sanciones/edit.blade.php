@extends('layouts.app')

@section('content')

<h1>Editar sanción</h1>

<form action="{{route('sanciones.update', $sancion->id)}}" method="POST">
    @csrf
        @method('PUT')
        <select name="alumno_id" id="alumno_id">
            @foreach ($alumnos as $alumno)
                <option value="{{$alumno->id}}" {{ $sancion->alumno_id == $alumno->id ? 'selected' : '' }}>
                    {{$alumno->matricula}}
                </option>
            @endforeach
        </select>

        <select name="vigilante_id" id="vigilante_id">
            @foreach ($vigilantes as $vigilante)
                <option value="{{$vigilante->id}}" {{ $sancion->vigilante_id == $vigilante->id ? 'selected' : '' }}>
                    {{$vigilante->matricula}}
                </option>
            @endforeach
        </select>

        <select name="multa_id" id="multa_id">
            @foreach ($multas as $multa)
                <option value="{{$multa->id}}" {{ $sancion->multa_id == $multa->id ? 'selected' : '' }}>
                    {{$multa->nombre_multa}}
                </option>
            @endforeach
        </select>

        <input type="text" name="descripcion" id="descripcion" placeholder="Descripcion de la sancion">
        <button type="submit">Registrar sanción</button>
</form>

<a href="{{ route('sanciones.index') }}">Volver</a>