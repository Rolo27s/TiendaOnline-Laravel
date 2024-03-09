@extends('layouts.vistapadre')

@section('titulo')
Inicio
@endsection

@section('contenidoPrincipal')

    <style>
        table, th, td {
            padding: 0.5em;
            border-collapse: collapse;
            border: 1px solid black;
            text-align: left;
        }
    </style>

    
    <!-- Esto es asqueroso, si queréis ponedlo más bonito -->

    <h1>Contenido del carrito</h1>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table>
        <tr>
            <th>Producto</th>
            <th>Cantidad</th>
            <th>Precio</th>
        </tr>

    @php
        $precioTotal = 0;
    @endphp

    @foreach($productos as $p)
        <tr>
            <td> {{ $p->catalogo->producto }} </td>
            <td> {{ $p->cantidad }} </td>
            <td> {{$p->catalogo->precio * $p->cantidad}} € </td>
            <td>
                <form method="POST" action="{{ route('carrito.destroy', $p->id)}}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                </form>
            </td>
        </tr>

        @php
            $precioTotal += $p->catalogo->precio * $p->cantidad;
        @endphp
    @endforeach
    </table>

    <br>
    <p><strong>TOTAL:</strong> {{ $precioTotal }} €</p>

@endsection
