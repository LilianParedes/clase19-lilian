<?php
use App\Http\Controllers\ContactoController;

Route::get('/contacto', function () {
    return view('emails.contactado');
});

Route::post('/contacto/enviar', [ContactoController::class, 'enviar'])->name('enviar.contacto');


