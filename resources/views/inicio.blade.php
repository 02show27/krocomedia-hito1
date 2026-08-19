<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>KrocoMedia</title>

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
                <a href="{{ route('inicio') }}">Inicio</a>
            </li>

            <li>
                <a href="#servicios">Servicios</a>
            </li>

            <li>
                <a href="{{ route('contacto') }}">Contacto</a>
            </li>
        </ul>
    </nav>

</header>

<main>

    <!-- INICIO -->

    <section class="hero" id="inicio">

        <p class="etiqueta">
            Diseño gráfico simple y colaborativo
        </p>

        <h1>
            Convierte tu idea en un gran proyecto
        </h1>

        <p>
            Envíanos tu requerimiento, trabajamos en tu propuesta
            y recibes el diseño listo para usar.
        </p>

        <a class="boton" href="{{ route('contacto') }}">
            Solicitar un diseño
        </a>

    </section>


    <!-- SERVICIOS -->

    <section class="seccion" id="servicios">

        <p class="etiqueta">
            Lo que hacemos
        </p>

        <h2>
            Servicios de diseño
        </h2>

        <div class="tarjetas">

            <article>
                <h3>Identidad visual</h3>

                <p>
                    Logotipos, colores y piezas que representan tu marca.
                </p>
            </article>


            <article>
                <h3>Diseño de invitaciones digitales</h3>

                <p>
                    Diseño para anuncios y acontecimientos.
                </p>
            </article>


            <article>
                <h3>Redes sociales</h3>

                <p>
                    Publicaciones y anuncios para tus plataformas digitales.
                </p>
            </article>


            <article>
                <h3>Material impreso</h3>

                <p>
                    Tarjetas, volantes, afiches y material promocional.
                </p>
            </article>

        </div>

    </section>


    <!-- PROCESO -->

    <section class="seccion" id="proceso">

        <p class="etiqueta">
            Un proceso claro
        </p>

        <h2>
            ¿Cómo funciona?
        </h2>

        <ol class="pasos">

            <li>
                <strong>Envías</strong>
                tu idea y los detalles.
            </li>

            <li>
                <strong>Diseñamos</strong>
                una propuesta.
            </li>

            <li>
                <strong>Revisas</strong>
                y compartes tus observaciones.
            </li>

            <li>
                <strong>Recibes</strong>
                el diseño final.
            </li>

        </ol>

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