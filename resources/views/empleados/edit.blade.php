@extends('layouts.app')

@section('title', 'Editar Empleado')

@section('content')
    <h2>Editar Empleado</h2>

    <form action="{{ route('empleados.update', $empleado) }}" method="POST">
        @csrf @method('PUT')

        <div class="mb-3">
            <label>Nombre:</label>
            <input type="text" name="nombre" class="form-control" value="{{ $empleado->nombre }}" required>
        </div>

        <div class="mb-3">
            <label>Email:</label>
            <input type="email" name="email" class="form-control" value="{{ $empleado->email }}" required>
        </div>

        <div class="mb-3">
            <label>DNI:</label>
            <input type="text" name="dni" class="form-control" value="{{ $empleado->dni }}" required>
        </div>

        <div class="mb-3">
            <label>Departamento:</label>
            <select name="departamento_id" class="form-control" required>
                @foreach($departamentos as $departamento)
                    <option value="{{ $departamento->id }}" {{ $empleado->departamento_id == $departamento->id ? 'selected' : '' }}>
                        {{ $departamento->nombre }}
                    </option>
                @endforeach
            </select>
        </div>

        <button class="btn btn-primary">Actualizar</button>
        <a href="{{ route('empleados.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection
