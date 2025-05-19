@extends('layouts.app')

@section('title', 'Lista de Empleados')

@section('content')
    <div class="d-flex justify-content-between mb-3">
        <h2>Empleados</h2>
        <a href="{{ route('empleados.create') }}" class="btn btn-primary">Nuevo Empleado</a>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Email</th>
                <th>DNI</th>
                <th>Departamento</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($empleados as $empleado)
                <tr>
                    <td>{{ $empleado->nombre }}</td>
                    <td>{{ $empleado->email }}</td>
                    <td>{{ $empleado->dni }}</td>
                    <td>{{ $empleado->departamento->nombre }}</td>
                    <td>
                        <a href="{{ route('empleados.show', $empleado) }}" class="btn btn-sm btn-info">Ver</a>
                        <a href="{{ route('empleados.edit', $empleado) }}" class="btn btn-sm btn-warning">Editar</a>
                        <form action="{{ route('empleados.destroy', $empleado) }}" method="POST" style="display:inline;">
                            @csrf @method('DELETE')
                            <button class="btn btn-sm btn-danger" onclick="return confirm('¿Eliminar este empleado?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
