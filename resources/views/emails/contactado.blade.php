
<h1>Mensaje Recibido</h1>
<p>Hola {{$nombre ?? 'Usuario'}}, si tu mensaje ha sido recibido, pronto un asesor VIP se contactará contigo.</p>

<form action="{{ route('enviar.contacto') }}" method="POST">
    @csrf
    <input type="text" name="nombre" placeholder="Tu nombre" required>
    <input type="email" name="email" placeholder="Tu correo" required>
    <textarea name="mensaje" placeholder="Escribe tu mensaje" required></textarea>
    <button type="submit">Enviar</button>
</form>

@if(session('success'))
    <p>{{ session('success') }}</p>
@endif
