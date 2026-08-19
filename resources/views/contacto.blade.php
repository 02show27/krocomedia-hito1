<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Contacto - KrocoMedia</title>

    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

</head>

<body>

<header>

    <a class="logo" href="{{ route('inicio') }}">
        Kroco<span>Media</span>
    </a>

    <nav>

        <ul>

            <li>
                <a href="{{ route('inicio') }}">
                    Inicio
                </a>
            </li>

            <li>
                <a href="{{ route('inicio') }}#servicios">
                    Servicios
                </a>
            </li>

            <li>
                <a href="{{ route('contacto') }}">
                    Contacto
                </a>
            </li>

        </ul>

    </nav>

</header>


<main>

    <section class="contacto">

        <div>

            <p class="etiqueta">
                Empecemos
            </p>

            <h1>
                Cuéntanos qué necesitas
            </h1>

            <p>
                Completa el formulario para conocer tu proyecto.
            </p>

        </div>


        <form method="POST" action="#">

            @csrf

            <label for="nombre">
                Nombre
            </label>

            <input
                id="nombre"
                type="text"
                name="nombre"
                placeholder="Tu nombre"
                required
            >


            <label for="apellido">
                Apellido
            </label>

            <input
                id="apellido"
                type="text"
                name="apellido"
                placeholder="Tu apellido"
                required
            >


            <label for="correo">
                Correo electrónico
            </label>

            <input
                id="correo"
                type="email"
                name="correo"
                placeholder="nombre@correo.com"
                required
            >


            <label for="telefono">
                Número de contacto
            </label>

            <input
                id="telefono"
                type="tel"
                name="telefono"
                placeholder="Tu número de teléfono"
                required
            >


            <label for="mensaje">
                Requerimiento
            </label>

            <textarea
                id="mensaje"
                name="mensaje"
                rows="5"
                placeholder="Describe el diseño que necesitas"
                required
            ></textarea>


            <button type="submit">
                Enviar requerimiento
            </button>

        </form>

    </section>

</main>


<footer>

    <p>
        &copy; 2026 KrocoMedia - Jhonny Tito -
        Todos los derechos reservados.
    </p>

    <p>
        Un diseño que conecta tus ideas.
    </p>

</footer>

</body>

</html>