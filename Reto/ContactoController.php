<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use Illuminate\Http\Request;

class ContactoController extends Controller
{
    // Muestra la lista de registros (para index.blade.php)
    public function index()
    {
        $contactos = Contacto::latest()->paginate(10);
        return view('admin.contactos.index', compact('contactos'));
    }

    // Muestra el formulario de alta (para create.blade.php)
    public function create()
    {
        return view('admin.contactos.create');
    }

    // Guarda el registro con la validación de stock y mensaje en español
    public function store(Request $request)
    {
        $validatedData = $request->validate(
            [
                'nombre'   => 'required|string|max:255',
                'apellido' => 'required|string|max:255',
                'correo'   => 'required|email|max:255',
                'telefono' => 'required|string|max:30',
                'mensaje'  => 'required|string',
                'stock'    => 'required|integer|min:0',
            ],
            [
                'stock.required' => 'El campo stock es obligatorio.',
                'stock.integer'  => 'El stock debe ser un número entero.',
                'stock.min'      => 'El stock no puede ser un valor negativo.',
            ]
        );

        Contacto::create([
            'nombre'   => $request->nombre,
            'apellido' => $request->apellido,
            'correo'   => $request->correo,
            'telefono' => $request->telefono,
            'mensaje'  => $request->mensaje,
            'stock'    => $request->stock,
            'estado'   => 'pendiente',
        ]);

        return redirect()->route('admin.contactos.index')->with('success', 'Solicitud registrada correctamente.');
    }

    // Muestra el detalle en el panel de administración
    public function show($id)
    {
        $contacto = Contacto::findOrFail($id);
        return view('admin.contactos.show', compact('contacto'));
    }

    // Muestra la vista privada de solicitud por UUID
    public function verSolicitud(string $uuid)
    {
        $contacto = Contacto::where('uuid', $uuid)->firstOrFail();
        return view('contactos.detalle', compact('contacto'));
    }

    // Muestra la vista pública para el cliente por UUID
    public function verPublico($uuid)
    {
        $contacto = Contacto::where('uuid', $uuid)->firstOrFail();
        return view('solicitud.ver', compact('contacto'));
    }
}