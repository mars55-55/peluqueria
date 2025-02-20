@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Especialidades</h1>
    <a href="{{ route('especialidades.create') }}" class="btn btn-primary mb-3">Agregar Especialidad</a>

    <table class="table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($especialidades as $especialidad)
                <tr>
                    <td>{{ $especialidad->nombre }}</td>
                    <td>
                        <form action="{{ route('especialidades.destroy', $especialidad) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
