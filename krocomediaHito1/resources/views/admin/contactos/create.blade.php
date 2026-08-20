<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Registrar Nueva Solicitud / Servicio
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">

                <form method="POST" action="{{ route('admin.contactos.store') }}">
                    @csrf

                   
                    <div style="margin-bottom: 15px;">
                        <label for="nombre" style="display: block; font-weight: bold; margin-bottom: 5px;">Nombre:</label>
                        <input type="text" name="nombre" id="nombre" value="{{ old('nombre') }}" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;" required>
                        @error('nombre')
                            <span style="color: #dc3545; font-size: 13px;">{{ $message }}</span>
                        @enderror
                    </div>

                    <div style="margin-bottom: 15px;">
                        <label for="apellido" style="display: block; font-weight: bold; margin-bottom: 5px;">Apellido:</label>
                        <input type="text" name="apellido" id="apellido" value="{{ old('apellido') }}" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;" required>
                        @error('apellido')
                            <span style="color: #dc3545; font-size: 13px;">{{ $message }}</span>
                        @enderror
                    </div>

           
                    <div style="margin-bottom: 15px;">
                        <label for="correo" style="display: block; font-weight: bold; margin-bottom: 5px;">Correo electrónico:</label>
                        <input type="email" name="correo" id="correo" value="{{ old('correo') }}" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;" required>
                        @error('correo')
                            <span style="color: #dc3545; font-size: 13px;">{{ $message }}</span>
                        @enderror
                    </div>

                    <div style="margin-bottom: 15px;">
                        <label for="telefono" style="display: block; font-weight: bold; margin-bottom: 5px;">Teléfono:</label>
                        <input type="text" name="telefono" id="telefono" value="{{ old('telefono') }}" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;">
                        @error('telefono')
                            <span style="color: #dc3545; font-size: 13px;">{{ $message }}</span>
                        @enderror
                    </div>

                    <div style="margin-bottom: 15px;">
                        <label for="stock" style="display: block; font-weight: bold; margin-bottom: 5px;">Stock / Cupos disponibles:</label>
                        <input type="number" name="stock" id="stock" value="{{ old('stock', 0) }}" min="0" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;" required>
                        @error('stock')
                            <span style="color: #dc3545; font-size: 13px; display: block; margin-top: 5px;">{{ $message }}</span>
                        @enderror
                    </div>

                    <div style="margin-bottom: 15px;">
                        <label for="mensaje" style="display: block; font-weight: bold; margin-bottom: 5px;">Mensaje / Detalle:</label>
                        <textarea name="mensaje" id="mensaje" rows="4" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;" required>{{ old('mensaje') }}</textarea>
                        @error('mensaje')
                            <span style="color: #dc3545; font-size: 13px;">{{ $message }}</span>
                        @enderror
                    </div>

                    <div style="margin-top: 20px;">
                        <button type="submit" style="background-color: #198754; color: white; padding: 10px 20px; border: none; border-radius: 4px; font-weight: bold; cursor: pointer;">
                            Guardar Registro
                        </button>
                    </div>

                </form>

            </div>
        </div>
    </div>
</x-app-layout>