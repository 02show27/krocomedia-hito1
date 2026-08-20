@extends('layouts.public')

@section('title', 'Contacto - KrocoMedia')

@section('content')
    <section class="contacto">
        <div>
            <p class="etiqueta">Empecemos</p>
            <h1>Cuéntanos qué necesitas</h1>
            <p>Completa el formulario para conocer tu proyecto.</p>
        </div>

        @if(session('success'))
            <div style="background-color: #d4edda; color: #155724; padding: 12px 16px; border-radius: 6px; margin-bottom: 20px; border: 1px solid #c3e6cb;">
                {{ session('success') }}
            </div>
        @endif

        @if($errors->any())
            <div style="background-color: #f8d7da; color: #721c24; padding: 12px 16px; border-radius: 6px; margin-bottom: 20px; border: 1px solid #f5c6cb;">
                <ul style="margin: 0; padding-left: 20px;">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('contacto.store') }}">
            @csrf

            <label for="nombre">Nombre</label>
            <input id="nombre" type="text" name="nombre" value="{{ old('nombre') }}" placeholder="Tu nombre" required>

            <label for="apellido">Apellido</label>
            <input id="apellido" type="text" name="apellido" value="{{ old('apellido') }}" placeholder="Tu apellido" required>

            <label for="correo">Correo electrónico</label>
            <input id="correo" type="email" name="correo" value="{{ old('correo') }}" placeholder="nombre@correo.com" required>

            <label for="telefono">Número de contacto</label>
            <input id="telefono" type="tel" name="telefono" value="{{ old('telefono') }}" placeholder="Tu número de teléfono" required>

            <label for="mensaje">Requerimiento</label>
            <textarea id="mensaje" name="mensaje" rows="5" placeholder="Describe el diseño que necesitas" required>{{ old('mensaje') }}</textarea>

            <button type="submit">Enviar requerimiento</button>
        </form>
    </section>
@endsection