@extends('layouts.vistapadre')

@section('titulo')
Inicio
@endsection

@section('contenidoPrincipal')

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <h2>¡Visita nuestras novedades!</h2>
    <div class="slideshow-container">
        <a href="#"><img class="mySlides" src="{{ asset('imagenes/cuadro.jpg') }}"></a>
        <a href="#"><img class="mySlides" src="{{ asset('imagenes/difusor.jpg') }}"></a>
        <a href="#"><img class="mySlides" src="{{ asset('imagenes/lampara.webp') }}" ></a>
        <a href="#"><img class="mySlides" src="{{ asset('imagenes/manta.jpg') }}"></a>

    </div>

    <script>
        var slideIndex = 0;
        carousel();

        function carousel() {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) {slideIndex = 1}
            slides[slideIndex-1].style.display = "block";
            setTimeout(carousel, 5000);
        }
    </script>
   <div class="quienesSomos">
        <h2>¿Quiénes somos?</h2>
        <p>Bienvenido a TodoTienda. En TodoTienda, nos enorgullece ofrecerte una amplia selección de productos extranjeros de alta calidad. Nuestra misión es proporcionarte acceso fácil y conveniente a productos de excelencia de todo el mundo. Descubre la diferencia que hacen los productos de calidad en tu vida diaria. ¡Explora TodoTienda hoy mismo!</p>
    </div>
    
    <h2>Comentarios de nuestros clientes</h2>
    <div class="testimonios">
        <div class="testimonio">
            <div class="info">
                <div class="nombre">Juan Pérez</div>
                <div class="puntuacion">5/5</div>
            </div>
            <p class="comentario">¡Increíble! Los productos de TodoTienda superaron mis expectativas. ¡Definitivamente volveré a comprar aquí!<span class="fecha"> - 11 de marzo de 2024</span></p>
        </div>
        <div class="testimonio">
            <div class="info">
                <div class="nombre">María Rodríguez</div>
                <div class="puntuacion">4/5</div>
            </div>
            <p class="comentario">Buena calidad y servicio. ¡Recomiendo TodoTienda!<span class="fecha"> - 10 de marzo de 2024</span></p>
        </div>
        <div class="testimonio">
            <div class="info">
                <div class="nombre">Carlos López</div>
                <div class="puntuacion">3/5</div>
            </div>
            <p class="comentario">Los productos son buenos, pero el envío fue un poco lento.<span class="fecha"> - 9 de marzo de 2024</span></p>
        </div>
        <div class="testimonio">
            <div class="info">
                <div class="nombre">Laura Martínez</div>
                <div class="puntuacion">5/5</div>
            </div>
            <p class="comentario">Excelente servicio al cliente y productos de alta calidad. ¡Totalmente satisfecha con mi compra!<span class="fecha"> - 8 de marzo de 2024</span></p>
        </div>
        <div class="testimonio">
            <div class="info">
                <div class="nombre">Pedro Sánchez</div>
                <div class="puntuacion">4.5/5</div>
            </div>
            <p class="comentario">Me encantaron los productos que compré en TodoTienda. Solo le doy 4.5 estrellas porque el envío tardó un poco más de lo esperado.<span class="fecha"> - 7 de marzo de 2024</span></p>
        </div>
    </div>

@endsection
