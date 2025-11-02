<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>@yield('title', 'Click Compra')</title>

  {{-- CSS --}}
  <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
  <link rel="stylesheet" href="{{ asset('css/pricing.css') }}">
</head>
<body>
  <header>
    <nav>
      <a href="{{ route('principal') }}">Inicio</a>
      <a href="{{ route('accesorios') }}">Accesorios</a>
      <a href="{{ route('ropa') }}">Ropa</a>
      <a href="{{ route('suplementacion') }}">Suplementación</a>
      <a href="{{ route('ubicacion') }}">Ubicación</a>
      <a href="{{ route('equipo') }}">Equipo</a>
      <a href="{{ route('politica') }}">Privacidad</a>
      <a href="{{ route('terminos') }}">Términos</a>
    </nav>
  </header>

  <main>
    @yield('content')
  </main>

  <footer>
    <p>&copy; {{ date('Y') }} Click Compra. Todos los derechos reservados.</p>
  </footer>

  {{-- JS --}}
  <script src="{{ asset('js/login.js') }}"></script>
  <script src="{{ asset('js/validacion_contraseña.js') }}"></script>
</body>
</html>
