<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contacto;
use App\Mail\RespuestaContactoMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactoAdminController extends Controller
{

    public function index()
    {
        $contactos = Contacto::latest()->paginate(10);
        return view('admin.contactos.index', compact('contactos'));
    }

    public function show(Contacto $contacto)
    {
        return view('admin.contactos.show', compact('contacto'));
        return view('contactos.detalle', compact('contacto'));
    }


    public function responder(Request $request, Contacto $contacto)
    {
        $request->validate([
            'respuesta' => 'required|string|min:5',
        ]);

        $contacto->update([
            'respuesta'     => $request->respuesta,
            'estado'        => 'atendido',
            'respondido_at' => now(),
        ]);


        Mail::to($contacto->correo)->send(new RespuestaContactoMail($contacto));

        return redirect()->route('admin.contactos.index')
            ->with('success', 'La respuesta ha sido enviada con éxito al cliente.');
    }

    
}
