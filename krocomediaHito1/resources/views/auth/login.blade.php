@extends('layouts.public')

@section('title', 'Iniciar Sesión - KrocoMedia')

@section('content')
<section class="contacto">
    <div>
        <p class="etiqueta">Acceso Restringido</p>
        <h1>Iniciar Sesión</h1>
        <p>Ingresa tus credenciales para acceder al panel de administración.</p>
    </div>

    {{-- Estado de sesión (ej. reseteo de contraseña) --}}
    @if (session('status'))
        <div style="background-color: #d1e7dd; color: #0f5132; padding: 12px 16px; border-radius: 6px; margin-bottom: 20px; border: 1px solid #badbcc;">
            {{ session('status') }}
        </div>
    @endif

    {{-- Alerta de errores de autenticación --}}
    @if ($errors->any())
        <div style="background-color: #f8d7da; color: #721c24; padding: 12px 16px; border-radius: 6px; margin-bottom: 20px; border: 1px solid #f5c6cb;">
            <ul style="margin: 0; padding-left: 20px;">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <label for="email">Correo electrónico</label>
        <input id="email" type="email" name="email" value="{{ old('email') }}" placeholder="admin@krocomedia.com" required autofocus autocomplete="username">

        <label for="password">Contraseña</label>
        <input id="password" type="password" name="password" placeholder="••••••••" required autocomplete="current-password">

        <div style="display: flex; align-items: center; gap: 8px; margin: 15px 0;">
            <input id="remember_me" type="checkbox" name="remember" style="width: auto; cursor: pointer;">
            <label for="remember_me" style="margin: 0; font-weight: normal; cursor: pointer;">Recordar mi sesión</label>
        </div>

        <button type="submit">Ingresar al Panel</button>

        @if (Route::has('password.request'))
            <p style="margin-top: 15px; text-align: center;">
                <a href="{{ route('password.request') }}" style="color: #0d6efd; text-decoration: underline;">
                    ¿Olvidaste tu contraseña?
                </a>
            </p>
        @endif
    </form>
</section>
@endsection