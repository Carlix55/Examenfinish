@extends('layouts.app')

@section('title', 'Nuevo Empleado')

@section('content')
    <h2>Nuevo Empleado</h2>

    <form action="{{ route('empleados.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label>Nombre:</label>
            <input type="text" name="nombre" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Email:</label>
            <input type="email" name="email" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>DNI:</label>
            <input type="text" name="dni" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Departamento:</label>
            <select name="departamento_id" class="form-control" required>
                <option value="">Seleccione...</option>
                @foreach($departamentos as $departamento)
                    <option value="{{ $departamento->id }}">{{ $departamento->nombre }}</option>
                @endforeach
            </select>
        </div>

        <button class="btn btn-success">Guardar</button>
        <a href="{{ route('empleados.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection
