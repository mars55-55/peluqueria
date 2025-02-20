@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Pagos</h1>

    <table class="table">
        <thead>
            <tr>
                <th>Barbero</th>
                <th>Cita</th>
                <th>Total Cobrado</th>
                <th>Ganancia del Barbero</th>
                <th>Fecha</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pagos as $pago)
                <tr>
                    <td>{{ $pago->barbero->user->name }}</td>
                    <td>Cita #{{ $pago->cita_id }}</td>
                    <td>${{ $pago->total_cobrado }}</td>
                    <td>${{ $pago->ganancia_barbero }}</td>
                    <td>{{ $pago->created_at->format('d/m/Y H:i') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
