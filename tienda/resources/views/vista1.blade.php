@extends('layouts.vistapadre')

@section('contenidoPrincipal')
    <h2>Contenido de la VISTA 1</h2>
    <p>********************************* <br> <br>
        La idea aqui es que vaya la portada de la tienda... algunas imagenes, descripcion inventada... quizas un iframe de una localizacion random donde supuestamente estaria la tienda fisica ??
        <br><br>
        **********************************
    </p>
<div class="card">
  <h5 class="card-header">Featured</h5>
  <div class="card-body">
    <h5 class="card-title">Special title treatment</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>

@php
    echo ' esto es parte de la vista 1';
@endphp

@endsection