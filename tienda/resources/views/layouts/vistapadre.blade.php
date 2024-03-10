<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('titulo')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/padre.css') }}">
    <link rel="stylesheet" href="{{ asset('css/trabaja.css') }}">
    <link rel="stylesheet" href="{{ asset('css/contacto.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
  </head>
  <body>
    <!--
    <h1>Bienvenido a la TodoTienda</h1>"TodoTienda" porque al parecer vendemos de todo
  
    <div class="container-fluid">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href=" {{ route('index') }} ">🛍️</a> 'productos' es el nombre de la vista Catalogo\index.blade.php, definida en routes/web, y puede cambiarse en caso de que sea necesario
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('index') }}">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('productos') }}">Productos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('carrito') }}">Carrito</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Otros
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{ route ('contacto') }}">Contacto</a></li>
            <li><a class="dropdown-item" href="{{ route ('trabaja') }}">Trabaja con nosotros</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
</div>
-->

<nav class="navbar">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a href="{{ route('index') }}" class="nav-link">Inicio</a>
        </li>
        <li class="nav-item">
            <a href="{{ route('productos') }}" class="nav-link">Productos</a>
        </li>
        <li class="nav-item">
            <a href="{{ route('carrito') }}" class="nav-link">Carrito</a>
        </li>
        <li class="nav-item">
          <a href="{{ route ('contacto') }}" class="nav-link">Contacto</a>
        </li>
        <li class="nav-item">
          <a href="{{ route ('trabaja') }}" class="nav-link">Trabaja con nosotros</a>
        </li>
        <li class="nav-item">
          <a href="{{ route('login') }}" class="nav-link">Iniciar sesión</a>
        </li>
        <li class="nav-item">
            <input type="text" placeholder="Buscar" class="nav-link" id="busqueda">
        </li>
        <li class="nav-item">
            <button class="nav-link">🔍</button>
        </li>
    </ul>
</nav>

    @yield('contenidoPrincipal')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>