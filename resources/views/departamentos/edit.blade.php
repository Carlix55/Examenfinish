@extends('layouts.app')

@section('title', 'Editar Departamento')

@section('content')
    <h2>Editar Departamento</h2>

    <form action="{{ route('departamentos.update', $departamento) }}" method="POST">
        @csrf @method('PUT')

        <div class="mb-3">
            <label>Nombre:</label>
            <input type="text" name="nombre" class="form-control" value="{{ $departamento->nombre }}" required>
        </div>

        <div class="mb-3">
            <label>Ubicación:</label>
            <input type="text" name="ubicacion" class="form-control" value="{{ $departamento->ubicacion }}" required>
        </div>

        <button class="btn btn-primary">Actualizar</button>
        <a href="{{ route('departamentos.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection
