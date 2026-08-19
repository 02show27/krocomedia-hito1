@extends('layouts.base')

@section('contenido')

    <h2>Inventario de herramientas</h2>

    <p>
        Ferretería El Tornillo es un negocio de barrio dedicado a ofrecer
        herramientas y productos para trabajos de reparación, construcción
        y mantenimiento.
    </p>


    <h3>
        Hay {{ count($herramientas) }} herramientas en el inventario.
    </h3>


    @if (count($herramientas) > 0)

        <ul>

            @foreach ($herramientas as $herramienta)

                <li>

                    <strong>
                        {{ $herramienta->nombre }}
                    </strong>

                    - Bs {{ $herramienta->precio }}

                </li>

            @endforeach

        </ul>

    @else

        <p>
            Todavía no hay herramientas registradas.
        </p>

    @endif


    <p>
        Inventario atendido por Jhonny Tito Castro
    </p>


    <a href="/herramientas/nuevo">
        Registrar nueva herramienta
    </a>

@endsection