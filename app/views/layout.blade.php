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
            
            @if(Auth::check())
            <li><a href="{{ route('register') }}">Registrate</a></li>
            <li><a href="{{ route('login') }}">Iniciar sesión</a></li>
            @endif
        </ul>
    </nav>

    @if(Session::has('message'))
    <div class="message">{{ Session::get('message') }}</div>
    @endif

    @if(Session::has('error'))
    <div class="error">{{ Session::get('error') }}</div>
    @endif

    @yield('content')
    @yield('scripts')
</body>
</html>