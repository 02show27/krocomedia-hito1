<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle de Solicitud - KrocoMedia</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans antialiased min-h-screen flex items-center justify-center p-4">

    <div class="max-w-2xl w-full bg-white rounded-lg shadow-md overflow-hidden p-6">
        
        <div class="border-b pb-4 mb-4 flex justify-between items-center">
            <h1 class="text-2xl font-bold text-gray-800">Estado de tu Solicitud</h1>
            <span class="px-3 py-1 text-sm font-semibold rounded-full {{ $contacto->estado === 'atendido' ? 'bg-green-100 text-green-800' : 'bg-yellow-100 text-yellow-800' }}">
                {{ ucfirst($contacto->estado ?? 'pendiente') }}
            </span>
        </div>

        <div class="space-y-4 text-gray-700">
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <span class="text-sm text-gray-500 block">Cliente:</span>
                    <strong class="text-base text-gray-900">{{ $contacto->nombre }} {{ $contacto->apellido }}</strong>
                </div>
                <div>
                    <span class="text-sm text-gray-500 block">Correo electrónico:</span>
                    <strong class="text-base text-gray-900">{{ $contacto->correo }}</strong>
                </div>
            </div>

            @if($contacto->telefono)
            <div>
                <span class="text-sm text-gray-500 block">Teléfono:</span>
                <strong class="text-base text-gray-900">{{ $contacto->telefono }}</strong>
            </div>
            @endif

            <hr class="my-4">

            <div>
                <h2 class="font-semibold text-gray-800 text-lg mb-2">Mensaje enviado:</h2>
                <div class="p-4 bg-gray-50 rounded-md border text-gray-800">
                    {{ $contacto->mensaje }}
                </div>
            </div>

            @if($contacto->estado === 'atendido' && $contacto->respuesta)
            <div>
                <h2 class="font-semibold text-green-700 text-lg mb-2">Respuesta de KrocoMedia:</h2>
                <div class="p-4 bg-green-50 border border-green-200 rounded-md text-green-900 font-medium">
                    {{ $contacto->respuesta }}
                </div>
                @if($contacto->respondido_at)
                    <p class="text-xs text-gray-400 mt-1">Atendido el: {{ \Carbon\Carbon::parse($contacto->respondido_at)->format('d/m/Y H:i') }}</p>
                @endif
            </div>
            @else
            <div class="p-4 bg-yellow-50 border border-yellow-200 rounded-md text-yellow-800 text-sm">
                Estamos procesando tu solicitud. Te responderemos a la brevedad.
            </div>
            @endif
        </div>

        <div class="mt-6 pt-4 border-t text-center text-xs text-gray-400">
            KrocoMedia — Sistema de atención de consultas
        </div>

    </div>

</body>
</html>