@extends('layouts.app')

@section('template_title')
    {{ $catalogo->name ?? __('Show') . " " . __('Catalogo') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Catalogo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('catalogos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Producto:</strong>
                            {{ $catalogo->producto }}
                        </div>
                        <div class="form-group">
                            <strong>Detalles:</strong>
                            {{ $catalogo->detalles }}
                        </div>
                        <div class="form-group">
                            <strong>Precio:</strong>
                            {{ $catalogo->precio }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
