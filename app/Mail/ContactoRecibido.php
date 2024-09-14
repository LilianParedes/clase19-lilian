<?php

use Illuminate\Mail\Mailables\Address;

class ContactoRecibido extends Mailable
{
    private $contacto; // Nueva propiedad para almacenar los datos del contacto

    public function __construct($contacto)
    {
        $this->contacto = $contacto; // Guarda los datos del contacto
    }

    public function envelope()
    {
        return new Envelope(
            from: new Address('paredeslilian@umes.edu.gt', 'Formulario de Contacto'),
            to: [new Address($this->contacto['email'], $this->contacto['nombre'])],
            subject: 'Contacto Recibido',
        );
    }

    public function content()
    {
        return new Content(
            view: 'emails.contactado',
            with: ['nombre' => $this->contacto['nombre']],
        );
    }
}
