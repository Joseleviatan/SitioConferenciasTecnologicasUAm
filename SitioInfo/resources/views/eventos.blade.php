@extends('layouts.app')

@section('content')
<div class="py-5" style="background-image: url('{{ asset('images/fondoeventos.jpg') }}'); background-size: cover; background-position: center; background-attachment: fixed;">
    <div class="container mt-5">
        <div class="container mt-5">
    <h1 class="text-center text-white fw-bold mb-4">Eventos</h1>
    <br>
    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card shadow p-0 h-100 card-hover" style="overflow: hidden; background-image: url('{{ asset('images/eventogit.jpg') }}'); background-size: cover; background-position: center;">
                <div class="card-body d-flex flex-column justify-content-end" style="background-color: rgba(255, 255, 255, 0.7); backdrop-filter: blur(2px); min-height: 300px;">
                <h5 class="card-title text-center fw-bold" style="color:rgb(5, 41, 96);">Uso de GitHub en proyectos colaborativos</h5>
                    <p class="card-text">Aprende a gestionar proyectos en equipo mediante GitHub, utilizando ramas, pull requests y gestión de repositorios.</p>
                    <p><strong>Fecha:</strong> 30 de Abril de 2025</p>
                    <p><strong>Horario:</strong> 10:00 AM - 12:00 PM</p>
                    <a href="{{ route('registro') }}" class="btn btn-outline-primary mt-auto btn-hover">Registrarme</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card shadow p-0 h-100 card-hover" style="overflow: hidden; background-image: url('{{ asset('images/dockerevent.jpg') }}'); background-size: cover; background-position: center;">
                <div class="card-body d-flex flex-column justify-content-end" style="background-color: rgba(255, 255, 255, 0.7); backdrop-filter: blur(2px); min-height: 300px;">
                <h5 class="card-title text-center fw-bold" style="color:rgb(5, 41, 96);">Introducción a Docker para entornos de desarrollo</h5>
                    <p class="card-text">Aprende a usar contenedores para crear entornos de desarrollo estandarizados, simples y rápidos con Docker.</p>
                    <p><strong>Fecha:</strong> 1 de Mayo de 2025</p>
                    <p><strong>Horario:</strong> 2:00 PM - 4:00 PM</p>
                    <a href="{{ route('registro') }}" class="btn btn-outline-primary mt-auto btn-hover">Registrarme</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card shadow p-0 h-100 card-hover" style="overflow: hidden; background-image: url('{{ asset('images/linuxevent.jpg') }}'); background-size: cover; background-position: center;">
                <div class="card-body d-flex flex-column justify-content-end" style="background-color: rgba(255, 255, 255, 0.7); backdrop-filter: blur(2px); min-height: 300px;">
                <h5 class="card-title text-center fw-bold" style="color:rgb(5, 41, 96);">Configuración básica de servidores Linux</h5>
                    <p class="card-text">Aprende los conceptos esenciales para configurar servidores Linux seguros para proyectos web.</p>
                    <p><strong>Fecha:</strong> 3 de Mayo de 2025</p>
                    <p><strong>Horario:</strong> 9:00 AM - 11:00 AM</p>
                    <a href="{{ route('registro') }}" class="btn btn-outline-primary mt-auto btn-hover">Registrarme</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection