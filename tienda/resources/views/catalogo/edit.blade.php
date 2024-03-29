@extends('layouts.app')

@section('template_title')
{{ __('Update') }} Catalogo
@endsection

@section('content')
<section class="content container-fluid">
    <div class="">
        <div class="col-md-12">

            @includeif('partials.errors')

            <div class="card card-default">
                <div class="card-header">
                    <span class="card-title">{{ __('Update') }} Catalogo</span>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('catalogos.update', $catalogo->id) }}" role="form" enctype="multipart/form-data">
                        @method('PATCH') <!-- Posible causa de error, si no funciona borrar esta línea -->
                        @csrf
                        @include('catalogo.form')

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection