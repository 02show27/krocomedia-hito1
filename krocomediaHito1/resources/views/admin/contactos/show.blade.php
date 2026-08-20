<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Detalle de Solicitud
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                
                <a href="{{ route('admin.contactos.index') }}" style="color: #fd0d11; text-decoration: underline; inset-block-end: ;">
                &circledcirc;  Volver al listado
                </a>

                <h3 class="text-lg font-bold mt-4">Cliente: {{ $contacto->nombre }} {{ $contacto->apellido }}</h3>
                <p><strong>Correo:</strong> {{ $contacto->correo }} | <strong>Teléfono:</strong> {{ $contacto->telefono }}</p>
                <p><strong>Estado actual:</strong> {{ ucfirst($contacto->estado) }}</p>

                <hr style="margin: 20px 0;">

                <h4 class="font-bold">Requerimiento enviado:</h4>
                <p style="background: #f8f9fa; padding: 15px; border-radius: 6px; margin-top: 10px;">
                    {{ $contacto->mensaje }}
                </p>

                <hr style="margin: 20px 0;">

                @if($contacto->estado === 'atendido')
                    <h4 class="font-bold">Respuesta enviada el {{ $contacto->respondido_at->format('d/m/Y H:i') }}:</h4>
                    <p style="background: #e9ecef; padding: 15px; border-radius: 6px; margin-top: 10px;">
                        {{ $contacto->respuesta }}
                    </p>
                @else
                    <h4 class="font-bold">Redactar Respuesta:</h4>
                    <form action="{{ route('admin.contactos.responder', $contacto->id) }}" method="POST" style="margin-top: 10px;">
                        @csrf
                        <textarea name="respuesta" rows="5" style="width: 100%; border: 1px solid #ccc; border-radius: 6px; padding: 10px;" placeholder="Escribe aquí la respuesta para el cliente..." required></textarea>
                        <br><br>
                        <button type="submit" style="background: #0d6efd; color: white; padding: 10px 20px; border: none; border-radius: 4px; cursor: pointer;">
                            Enviar Respuesta por Correo
                        </button>
                    </form>
                @endif

            </div>
        </div>
    </div>
</x-app-layout>