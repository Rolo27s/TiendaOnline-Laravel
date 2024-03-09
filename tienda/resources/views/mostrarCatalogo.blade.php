@extends('layouts.vistapadre')

@section('titulo')
    Productos del Catálogo
@endsection

@section('contenidoPrincipal')

<style>
    table, th, td {
        padding: 0.5em;
        border-collapse: collapse;
        border: 1px solid black;
        text-align: left;
    }
    .selectorCantidad {
        max-width: fit-content;
        margin-right: 0.5em;
    }
</style>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

        <h1 class="my-3">Catalogo</h1>
        <div class="row">
            @foreach($catalogos as $catalogo)
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">{{ $catalogo->producto }}</h5>
                        <p class="card-text">{{ $catalogo->detalles }}</p>
                        <p class="card-text"><strong>Precio:</strong> {{ $catalogo->precio }}€</p>
                        <div class="d-flex">
                            <form method="POST" action="{{ route('carrito.add') }}" role="form" enctype="multipart/form-data">
                                @csrf
                                <input type="number" name="id" id="id" value="{{ $catalogo->id }}" hidden>
                                <label for="cantidad">Cantidad: <input type="number" name="cantidad" id="cantidad" value="1" min="1"></label>
                                <input class="btn btn-primary" type="submit" value="Añadir al carrito">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

@endsection