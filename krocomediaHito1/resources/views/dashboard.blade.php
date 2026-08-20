@extends('layouts.public')

@section('title', 'Panel de Control - KrocoMedia')

@section('content')
<section class="contacto">
    <div>
        <p class="etiqueta">Panel de Control</p>
        <h1>Bienvenido, {{ Auth::user()->name }}</h1>
        <p>Iniciaste sesión correctamente.</p>
    </div>

    <div style="background-color: #f8f9fa; border: 1px solid #e9ecef; border-radius:
    8px; padding: 25px; margin-top: 20px; text-align: center;">
        <h3 style="margin-bottom: 10px; color: #212529;">Gestión de Solicitudes</h3>
        <p style="color: #6c757d; margin-bottom: 20px;">Accede al listado de requerimientos enviados por los clientes para ver detalles o responder.</p>
        
        <a href="{{ route('admin.contactos.index') }}" class="boton" style="display: 
        inline-block; text-decoration: none;">
            Ir a Solicitudes de Contacto
        </a>
    </div>
</section>
@endsection