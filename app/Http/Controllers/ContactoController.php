<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactoController extends Controller
{
    public function enviar(Request $request)
    {
        // Valida los datos del formulario
        $validatedData = $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email',
            'mensaje' => 'required|string',
        ]);

        // Aquí puedes procesar los datos, como enviarlos por correo o almacenarlos en la base de datos.

        return back()->with('success', 'Tu mensaje ha sido enviado correctamente.');
    }
}

return view('emails.contactado');

