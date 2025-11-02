<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head>
    {{-- Scripts y meta --}}
    <script src="{{ asset('asset/js/color-modes.js') }}"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Click y Compra</title>

    {{-- Bootstrap CSS --}}
    <link href="{{ asset('asset/css/bootstrap.min.css') }}" rel="stylesheet">

    {{-- Estilos propios --}}
    <link href="{{ asset('asset/css/pricing.css') }}" rel="stylesheet">
  </head>
  <body>

    <div class="container py-3">
      <header>
        <div class="d-flex align-items-center w-100 justify-content-between">
          <div class="d-flex flex-column align-items-center">
            <h1 class="display-4 fw-normal text-body-emphasis text-center">
              <a href="{{ url('/') }}" class="text-primary text-decoration-none">Click y Compra</a>
            </h1>
            <img src="{{ asset('asset/images/Logo.png') }}" class="logo mt-1">
          </div>

          <nav class="d-flex gap-4">
            <a class="fs-5 link-body-emphasis text-decoration-none" href="{{ route('suplementacion') }}">Suplementación</a>
            <a class="fs-5 link-body-emphasis text-decoration-none" href="{{ route('ropa') }}">Ropa</a>
            <a class="fs-5 link-body-emphasis text-decoration-none" href="{{ route('accesorios') }}">Accesorios</a>
            <a class="fs-5 link-body-emphasis text-decoration-none" href="{{ route('register') }}">Inicia sesión</a>
          </nav>
        </div>

        <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
          <h1 class="display-4 fw-normal text-body-emphasis">Click y Compra </h1>
          <p class="fs-5 text-body-secondary">En este sitio web, podrás encontrar los mejores productos de la más alta calidad</p>
        </div>
      </header>

      {{-- Aqui va el contenido principal (cards) --}}
      <main>
        <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
          <div class="col">
            <div class="card mb-4 rounded-3 shadow-sm">
              <div class="card-header py-3">
                <h4 class="my-0 fw-normal">Suplementación</h4>
              </div>
              <div class="card-body text-center">
                <img src="{{ asset('asset/images/Suplementacion.png') }}" class="imagen-ropa mb-4">
                <p class="text-muted">Elige los mejores suplementos</p>
                <p>En nuestra tienda encontrarás una amplia variedad de productos diseñados para apoyar tus objetivos, ya sea 
                ganar masa muscular, mejorar tu recuperación o simplemente cuidar tu salud.</p>
                <a href="{{ url('suplementacion') }}" class="w-100 btn btn-lg btn-outline-primary">Click aquí</a>
              </div>
            </div>
          </div>

          {{-- Ropa --}}
          <div class="col">
            <div class="card mb-4 rounded-3 shadow-sm">
              <div class="card-header py-3">
                <h4 class="my-0 fw-normal">Ropa</h4>
              </div>
              <div class="card-body text-center">
                <img src="{{ asset('asset/images/ropa.png') }}" class="imagen-ropa mb-4">
                <p class="text-muted">Elige tu mejor prenda de ropa</p>
                <p>Bienvenido a nuestro catálogo de ropa deportiva, en este catálogo encontrarás nuestras prendas de ropa deportiva de excelente calidad.</p>
                <a href="{{ url('ropa') }}" class="w-100 btn btn-lg btn-outline-primary">Click aquí</a>
              </div>
            </div>
          </div>

          {{-- Accesorios --}}
          <div class="col">
            <div class="card mb-4 rounded-3 shadow-sm">
              <div class="card-header py-3">
                <h4 class="my-0 fw-normal">Accesorios</h4>
              </div>
              <div class="card-body text-center">
                <img src="{{ asset('asset/images/ACCESORIOS.png') }}" class="imagen-accesorios mb-4">
                <p class="text-muted">Elige los mejores accesorios</p>
                <p>Bienvenido a nuestro catálogo de accesorios deportivos, en este catálogo encontrarás una gran variedad 
                de accesorios deportivos para tu día a día, no te pierdas de ninguno.</p>
                <a href="{{ url('accesorios') }}" class="w-100 btn btn-lg btn-outline-primary">Click aquí</a>
              </div>
            </div>
          </div>
        </div>
      </main>

      <footer class="pt-4 my-md-5 pt-md-5 border-top">
        <div class="row">
          <div class="col-12 col-md">
            <img class="mb-2 logo" src="{{ asset('asset/images/Logo.png') }}">
            <small class="d-block mb-3 text-body-secondary">&copy; 2025–2025</small>
          </div>
          <div class="col-6 col-md">
            <h5>Acerca de nosotros</h5>
            <ul class="list-unstyled text-small">
              <li class="mb-1"><a class="link-secondary text-decoration-none" href="{{ route('equipo') }}">Equipo de trabajo</a></li>
              <li class="mb-1"><a class="link-secondary text-decoration-none" href="{{ route('ubicacion') }}">Ubicaciones</a></li>
              <li class="mb-1"><a class="link-secondary text-decoration-none" href="{{ route('politica') }}">Política de Privacidad</a></li>
              <li class="mb-1"><a class="link-secondary text-decoration-none" href="{{ route('terminos') }}">Términos y Condiciones</a></li>
            </ul>
          </div>
        </div>
      </footer>
    </div>

    {{-- Bootstrap JS --}}
    <script src="{{ asset('asset/js/bootstrap.bundle.min.js') }}"></script>
  </body>
</html>
