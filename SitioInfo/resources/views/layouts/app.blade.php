<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UAM</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
<style>

.wrapper-hover {
    overflow: hidden; /* Evita que el card se rompa al crecer */
    transition: all 0.5s ease-in-out;
}

.card-hover {
    transition: all 0.5s ease-in-out;
    border-radius: 10px;
}

.card-hover:hover {
    transform: scale(1.05); 
    box-shadow: 0px 12px 24px rgba(0, 0, 0, 0.3);
    border-radius: 15px;
}
.nav-link {
    transition: color 0.3s ease, background-color 0.3s ease;
}
.nav-link:hover {
    color: #0d6efd !important; 
    background-color: rgba(255, 255, 255, 0.3); 
    border-radius: 5px;
}

.btn-hover {
    transition: transform 0.4s ease-in-out, box-shadow 0.4s ease-in-out;
    
}

.btn-hover:hover {
    transform: scale(1.05);
    box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.25); 
}
</style>

</style>

</style>

</head>
<body style="background-color: #e3f2fd;">
<nav class="navbar navbar-expand-lg shadow-sm" style="background-color:rgb(142, 189, 233);">
    <div class="container">
        <a class="navbar-brand text-dark fw-bold" href="{{ route('inicio') }}">UAM</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('inicio') ? 'active' : '' }} text-dark" href="{{ route('inicio') }}">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('eventos') ? 'active' : '' }} text-dark" href="{{ route('eventos') }}">Eventos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('registro') ? 'active' : '' }} text-dark" href="{{ route('registro') }}">Registro</a>
                </li>
            </ul>

            <ul class="navbar-nav">
                @guest
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="{{ route('login') }}">Iniciar sesión</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="{{ route('register') }}">Registrarse</a>
                    </li>
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle text-dark" href="#" role="button" data-bs-toggle="dropdown">
                            {{ Auth::user()->name }}
                        </a>

                        <ul class="dropdown-menu dropdown-menu-end">
                            <li>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    Cerrar sesión
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>


    <main class="py-4">
        @yield('content')
    </main>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <footer class="text-center text-dark py-3 mt-5"  style="background-color:rgb(142, 189, 233);">
    <div class="container">
        <p class="mb-0 fw-bold">© {{ date('Y') }} Universidad Americana (UAM). Todos los derechos reservados.</p>
    </div>
</footer>

</body>
</html>
