@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Citas</h1>
    <a href="{{ route('citas.create') }}" class="btn btn-primary mb-3">Agendar Nueva Cita</a>

    <table class="table">
        <thead>
            <tr>
                <th>Cliente</th>
                <th>Barbero</th>
                <th>Fecha y Hora</th>
                <th>Precio</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($citas as $cita)
                <tr>
                    <td>{{ $cita->cliente->name }}</td>
                    <td>{{ $cita->barbero->user->name }}</td>
                    <td>{{ $cita->fecha_hora }}</td>
                    <td>${{ $cita->precio }}</td>
                    <td>{{ ucfirst($cita->estado) }}</td>
                    <td>
                        <form action="{{ route('citas.destroy', $cita) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Cancelar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
