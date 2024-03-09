@extends('layouts.vistapadre')

@section('titulo')
    Productos del Catálogo
@endsection

@section('contenidoPrincipal')

<h1>Entradas de la tabla Catálogos</h1>

<style>
    table, th, td {
        padding: 0.5em;
        border-collapse: collapse;
        border: 1px solid black;
        text-align: left;
    }
</style>

<table>
    <tr>
        <th>ID</th> <!-- Puesto como referencia por ahora, si hay que quitarlo se quita -->
        <th>Producto</th>
        <th>Detalles</th>
        <th>Precio</th>
    </tr>
    @foreach($catalogos as $c)
        <tr>
            <td>{{$c->id}}</td> <!-- Puesto como referencia por ahora, si hay que quitarlo se quita -->
            <td>{{$c->producto}}</td>
            <td>{{$c->detalles}}</td>
            <td>{{$c->precio}}</td>
        </tr>
    @endforeach
</table>

@endsection