<!-- resources/views/barberia/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">

        <!-- Carrusel de Cortes de Cabello -->
        <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://via.placeholder.com/800x400?text=Corte+de+Cabello+1" class="d-block w-100" alt="Corte de Cabello 1">
                </div>
                <div class="carousel-item">
                    <img src="https://via.placeholder.com/800x400?text=Corte+de+Cabello+2" class="d-block w-100" alt="Corte de Cabello 2">
                </div>
                <div class="carousel-item">
                    <img src="https://via.placeholder.com/800x400?text=Corte+de+Cabello+3" class="d-block w-100" alt="Corte de Cabello 3">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <!-- Botones de acción (Registrarse, Iniciar sesión, Reservar corte) -->
        <div class="mt-4 text-center">
            <a href="{{ route('register') }}" class="btn btn-primary">Registrarse</a>
            <a href="{{ route('login') }}" class="btn btn-secondary">Iniciar sesión</a>
            <a href="{{ route('reservas.create') }}" class="btn btn-success">Reservar Corte</a>
        </div>

    </div>
@endsection
