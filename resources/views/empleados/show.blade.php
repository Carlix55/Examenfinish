@extends('layouts.app')

@section('title', 'Detalle del Empleado')

@section('content')
    <h2>Empleado: {{ $empleado->nombre }}</h2>

    <ul class="list-group">
        <li class="list-group-item"><strong>Email:</strong> {{ $empleado->email }}</li>
        <li class="list-group-item"><strong>DNI:</strong> {{ $empleado->dni }}</li>
        <li class="list-group-item"><strong>Departamento:</strong> {{ $empleado->departamento->nombre }}</li>
    </ul>

    <a href="{{ route('empleados.index') }}" class="btn btn-secondary mt-3">Volver</a>
@endsection
