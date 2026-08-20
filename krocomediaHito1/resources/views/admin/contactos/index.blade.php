<x-app-layout>
<x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Gestión de Solicitudes - KrocoMedia
            </h2>
            <a href="{{ route('admin.contactos.create') }}" 
               style="background-color: #198754; color: #ffffff; 
               padding: 8px 16px; border-radius: 6px; text-decoration: none; font-size: 14px; font-weight: bold;">
                + Registrar Solicitud con Stock
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">

                @if(session('success'))
                    <div style="background: #d4edda; color: #155724; padding: 12px; border-radius: 6px; margin-bottom: 20px;">
                        {{ session('success') }}
                    </div>
                @endif

                <table border="1" cellpadding="10" cellspacing="0" style="width: 100%; border-collapse: collapse;">
                    <thead>
                        <tr style="background: #f2f2f2;">
                            <th>Fecha</th>
                            <th>Cliente</th>
                            <th>Correo</th>
                            <th>Stock</th> 
                            <th>Estado</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($contactos as $contacto)
                        <tr>
                            <td>{{ $contacto->created_at ? $contacto->created_at->format('d/m/Y H:i') : 'N/A' }}</td>
                            <td>{{ $contacto->nombre }} {{ $contacto->apellido }}</td>
                            <td>{{ $contacto->correo }}</td>
                            <td>
                                <strong>{{ $contacto->stock ?? 0 }}</strong> 
                            </td>
                            <td>
                                <span style="padding: 4px 8px; border-radius: 4px; color: #fff; background: 
                                {{ $contacto->estado==='atendido' ? '#28a745' : '#ffc107' }}">
                                    {{ ucfirst($contacto->estado ?? 'pendiente') }}
                                </span>
                            </td>
                            <td>
                                <div style="display: flex; gap: 10px; align-items: center;">
                                    <a href="{{ route('admin.contactos.show', $contacto->id) }}" 
                                       style="background-color: #0d6efd; color: #fff; padding: 6px 12px; border-radius: 
                                       4px; text-decoration: none; font-size: 13px; font-weight: bold;">
                                        Ver / Responder
                                    </a>

                                    @if(!empty($contacto->uuid))
                                        <a href="{{ route('solicitud.ver', $contacto->uuid) }}" 
                                           target="_blank"
                                           style="background-color: #6c757d; color: #fff; padding: 6px 12px; border-radius: 
                                           4px; text-decoration: none; font-size: 13px; font-weight: bold;">
                                            Vista Cliente ↗
                                        </a>
                                    @else
                                        <span style="font-size: 12px; color: #888; font-style: italic;">Sin UUID</span>
                                    @endif
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6" style="text-align: center; color: #666; padding: 20px;">
                                No hay solicitudes registradas.
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>

                <div style="margin-top: 20px;">
                    {{ $contactos->links() }}
                </div>

            </div>
        </div>
    </div>
</x-app-layout>