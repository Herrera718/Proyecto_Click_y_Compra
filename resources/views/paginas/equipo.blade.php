<!doctype html>
<html lang="es" data-bs-theme="auto">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Equipo de trabajo · Click y Compra</title>

    <!-- Bootstrap -->
    <link href="{{ asset('asset/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- estilos -->
    <link href="{{ asset('asset/css/pricing.css') }}" rel="stylesheet">
  </head>
  <body>
<div class="container py-3">
  <header>
    <div class="d-flex align-items-center w-100 justify-content-between">
      <div class="d-flex flex-column align-items-center">
        <h1 class="display-4 fw-normal text-body-emphasis text-center">
          <a href="{{ route('principal') }}" class="text-primary text-decoration-none">Click y Compra</a>
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
      <h1 class="display-4 fw-normal text-body-emphasis">Equipo de trabajo</h1>
      <p class="fs-5 text-body-secondary">
        A continuación podrán observar información del equipo de trabajo que está detrás de este proyecto
      </p>
    </div>
  </header>

  <main>
    <div class="row row-cols-1 row-cols-md-2 mb-3 text-center">
      <!-- Integrante 1 -->
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Integrante Nº1</h4>
          </div>
          <div class="card-body text-center">
            <img src="{{ asset('asset/Images/soto.png') }}" class="imagen-ropa mb-4">
            <p class="text-muted">Manuel David Soto Mejia</p>
            <p class="text">
              Tiene 18 años. Es un joven inteligente y visionario, con gran interés en el desarrollo tecnológico y la innovación. <br>
              Contacto: +57 313 3358335
            </p>
          </div>
        </div>
      </div>

      <!-- Integrante 2 -->
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Integrante Nº2</h4>
          </div>
          <div class="card-body text-center">
            <img src="{{ asset('asset/Images/Oscar_foto.png') }}" class="imagen-ropa mb-4">
            <p class="text-muted">Oscar David Herrera Campos</p>
            <p class="text">
              Tiene 17 años. Se destaca por su disciplina, inteligencia y visión. Siempre aporta ideas creativas y soluciones prácticas. <br>
              Contacto: +57 312 6118270
            </p>
          </div>
        </div>
      </div>

      <!-- Integrante 3 -->
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Integrante Nº3</h4>
          </div>
          <div class="card-body text-center">
            <img src="{{ asset('asset/Images/Brayan.png') }}" class="imagen-accesorios mb-4">
            <p class="text-muted">Brayan Andrez Chamorro Josa</p>
            <p class="text">
              Tiene 19 años y vive en El Guamo. Es un estudiante comprometido, con un fuerte sentido de responsabilidad y dedicación académica. <br>
              Contacto: +57 313 6636683
            </p>
          </div>
        </div>
      </div>
    </div>
  </main>

  <footer class="pt-4 my-md-5 pt-md-5 border-top">
    <div class="row">
      <div class="col-12 col-md">
        <img class="mb-2 logo" src="{{ asset('asset/Images/Logo.png') }}" alt="Logo">
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

<script src="{{ asset('asset/js/bootstrap.bundle.min.js') }}"></script>
  </body>
</html>
