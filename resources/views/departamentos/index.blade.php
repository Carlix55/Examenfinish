@extends('layouts.app')

@section('title', 'Departamentos')

@section('content')
    <div class="d-flex justify-content-between mb-3">
        <h2>Departamentos</h2>
        <a href="{{ route('departamentos.create') }}" class="btn btn-primary">Nuevo Departamento</a>
    </div>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Ubicación</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($departamentos as $departamento)
                <tr>
                    <td>{{ $departamento->nombre }}</td>
                    <td>{{ $departamento->ubicacion }}</td>
                    <td>
                        <a href="{{ route('departamentos.show', $departamento) }}" class="btn btn-sm btn-info">Ver</a>
                        <a href="{{ route('departamentos.edit', $departamento) }}" class="btn btn-sm btn-warning">Editar</a>
                        <form action="{{ route('departamentos.destroy', $departamento) }}" method="POST" class="d-inline">
                            @csrf @method('DELETE')
                            <button class="btn btn-sm btn-danger" onclick="return confirm('¿Eliminar este departamento?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
