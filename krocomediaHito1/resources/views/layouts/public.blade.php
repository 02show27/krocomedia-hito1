<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'KrocoMedia')</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>

    <header>
        <a class="logo" href="{{ url('/') }}">
            Kroco<span>Media</span>
        </a>

        <nav>
            <ul>
                <li><a href="{{ url('/') }}">Inicio</a></li>
                <li><a href="{{ url('/#servicios') }}">Servicios</a></li>
                <li><a href="{{ route('contacto') }}">Contacto</a></li>

                @if (Route::has('login'))
                    @auth
                        <li>
                            <a href="{{ route('admin.contactos.index') }}" class="btn-panel">
                                Panel Admin
                            </a>
                        </li>
                    @else
                        <li>
                            <a href="{{ route('login') }}" class="btn-login">
                                Iniciar Sesión
                            </a>
                        </li>
                    @endauth
                @endif
            </ul>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; 2026 KrocoMedia - Jhonny Tito Castro- Todos los derechos reservados.</p>
        <p>Un diseño que conecta tus ideas.</p>
    </footer>

</body>
</html>