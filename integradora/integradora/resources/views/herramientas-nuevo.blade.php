@extends('layouts.base')

@section('contenido')

    <h2>Registrar herramienta</h2>


    @if ($errors->any())

        <div>

            <h3>Hay errores en el formulario:</h3>

            <ul>

                @foreach ($errors->all() as $error)

                    <li>
                        {{ $error }}
                    </li>

                @endforeach

            </ul>

        </div>

    @endif


    <form action="/herramientas/nuevo" method="POST">

        @csrf


        <div>

            <label for="nombre">
                Nombre de la herramienta
            </label>

            <input
                type="text"
                id="nombre"
                name="nombre"
                value="{{ old('nombre') }}"
            >

        </div>


        <br>


        <div>

            <label for="precio">
                Precio en Bs
            </label>

            <input
                type="number"
                id="precio"
                name="precio"
                value="{{ old('precio') }}"
            >

        </div>


        <br>


        <button type="submit">
            Registrar herramienta
        </button>

    </form>


    <br>


    <a href="/herramientas">
        Volver al inventario
    </a>

@endsection