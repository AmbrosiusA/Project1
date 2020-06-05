<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('/js/app.js') }}" defer></script>
    
    <title>@yield('titulo')</title>
</head>
<body>
    <header>
        <div>
            <nav class="navbar bg-dark shadow-sm">
                <a class="navbar-brand" href="{{ route('home') }}">{{ config('app.name') }}</a>
                <ul class="nav">
                    <li class="nav-item "><a class="nav-link"href="{{ route('home') }}">Inicio</a></li>
                    <li class="nav-item "><a class="nav-link" href="{{ route('users.index') }}">Usuarios</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <div class="container">
        @yield('contenido')

        <footer class="page-footer font-small bg-dark">
            <div class="footer-copyright text-center text-light py-3">© 2020 Copyright: 
                <a href="{{ route('home') }}"> Ejemplo Examen</a>
            </div>
            </div>
        </footer>
    </div>
</body>
</html>