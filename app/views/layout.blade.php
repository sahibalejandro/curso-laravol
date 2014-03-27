<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')Carrito de compras</title>
    @yield('styles')
</head>
<body>

    <nav class="menu">
        <ul>
            <li><a href="{{ route('home') }}">Inicio</a></li>
            <li><a href="">Registrate</a></li>
            <li><a href="{{ route('login') }}">Iniciar sesión</a></li>
        </ul>
    </nav>

    @yield('content')
    @yield('scripts')
</body>
</html>