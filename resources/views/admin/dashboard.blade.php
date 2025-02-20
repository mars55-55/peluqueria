@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Panel de Administración</h1>
    <p>Bienvenido, {{ Auth::user()->name }}.</p>

    <ul>
        <li><a href="{{ route('barberos.index') }}">Gestionar Barberos</a></li>
        <li><a href="{{ route('especialidades.index') }}">Gestionar Especialidades</a></li>
        <li><a href="{{ route('citas.index') }}">Gestionar Citas</a></li>
        <li><a href="{{ route('pagos.index') }}">Ver Pagos</a></li>
    </ul>
</div>
@endsection
