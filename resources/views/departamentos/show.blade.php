@extends('layouts.app')

@section('title', 'Detalle del Departamento')

@section('content')
    <h2>Departamento: {{ $departamento->nombre }}</h2>

    <ul class="list-group">
        <li class="list-group-item"><strong>Nombre:</strong> {{ $departamento->nombre }}</li>
        <li class="list-group-item"><strong>Ubicación:</strong> {{ $departamento->ubicacion }}</li>
    </ul>

    <a href="{{ route('departamentos.index') }}" class="btn btn-secondary mt-3">Volver</a>
@endsection
