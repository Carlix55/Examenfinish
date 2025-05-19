@extends('layouts.app')

@section('title', 'Crear Departamento')

@section('content')
    <h2>Nuevo Departamento</h2>

    <form action="{{ route('departamentos.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label>Nombre:</label>
            <input type="text" name="nombre" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Ubicación:</label>
            <input type="text" name="ubicacion" class="form-control" required>
        </div>

        <button class="btn btn-success">Guardar</button>
        <a href="{{ route('departamentos.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection
