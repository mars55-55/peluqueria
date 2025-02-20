@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lista de Barberos</h1>
    <a href="{{ route('barberos.create') }}" class="btn btn-primary mb-3">Agregar Barbero</a>

    <table class="table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Porcentaje Ganancia</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($barberos as $barbero)
                <tr>
                    <td>{{ $barbero->user->name }}</td>
                    <td>{{ $barbero->user->email }}</td>
                    <td>{{ $barbero->porcentaje_ganancia }}%</td>
                    <td>
                        <a href="#" class="btn btn-warning">Editar</a>
                        <form action="{{ route('barberos.destroy', $barbero) }}" method="POST" style="display:inline;">
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
 