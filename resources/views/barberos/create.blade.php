@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Agregar Barbero</h1>

    <form action="{{ route('barberos.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label>Nombre</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <div class="form-group">
            <label>Correo</label>
            <input type="email" name="email" class="form-control" required>
        </div>

        <div class="form-group">
            <label>Contraseña</label>
            <input type="password" name="password" class="form-control" required>
        </div>

        <div class="form-group">
            <label>Porcentaje de Ganancia</label>
            <input type="number" name="porcentaje_ganancia" class="form-control" step="0.01" required>
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
@endsection
