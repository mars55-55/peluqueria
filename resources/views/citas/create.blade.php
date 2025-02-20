@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Agendar Cita</h1>

    <form action="{{ route('citas.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label>Cliente</label>
            <select name="cliente_id" class="form-control">
                @foreach ($clientes as $cliente)
                    <option value="{{ $cliente->id }}">{{ $cliente->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label>Barbero</label>
            <select name="barbero_id" class="form-control">
                @foreach ($barberos as $barbero)
                    <option value="{{ $barbero->id }}">{{ $barbero->user->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label>Fecha y Hora</label>
            <input type="datetime-local" name="fecha_hora" class="form-control" required>
        </div>

        <div class="form-group">
            <label>Precio</label>
            <input type="number" name="precio" class="form-control" step="0.01" required>
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
@endsection
