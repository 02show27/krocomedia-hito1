<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <style>
        body { font-family: Arial, sans-serif; color: #333; line-height: 1.6; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; border: 1px solid #eee; border-radius: 8px; }
        .header { background-color: #1a1a1a; color: #fff; padding: 15px; text-align: center; font-size: 20px; font-weight: bold; }
        .content { padding: 20px; }
        .footer { font-size: 12px; color: #777; text-align: center; margin-top: 20px; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">KrocoMedia</div>
        <div class="content">
            <h2>Hola, {{ $contacto->nombre }} {{ $contacto->apellido }}</h2>
            <p>Hemos procesado tu requerimiento enviado recientemente:</p>
            <blockquote style="background: #f9f9f9; padding: 10px; border-left: 4px solid #ccc;">
                "{{ $contacto->mensaje }}"
            </blockquote>
            <h3>Nuestra Respuesta:</h3>
            <p>{{ $contacto->respuesta }}</p>
        </div>
        <div class="footer">
            &copy; 2026 KrocoMedia. Todos los derechos reservados.
        </div>
    </div>
</body>
</html>