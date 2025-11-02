<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head>
    <script src="{{ asset('assets/js/color-modes.js') }}"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Política de Privacidad - Click y Compra</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link href="{{ asset('asset/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('asset/css/pricing.css') }}" rel="stylesheet">
  </head>
  <body>
    <!-- HEADER -->
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
          <h1 class="display-4 fw-normal text-body-emphasis">Política de Privacidad</h1>
        </div>
      </header>

      <!-- CONTENIDO -->
      <main>
        <div class="container py-5">
          <p class="lead text-center mb-5">
            En Rincón del Deporte nos comprometemos a proteger tu información personal y garantizar una experiencia de compra segura y confiable.
          </p>

          <div class="mb-4">
            <h4>1. Recopilación de Información</h4>
            <p>Recopilamos datos personales como nombre, correo electrónico, dirección de envío y número de contacto únicamente cuando realizas una compra, te registras o interactúas con nuestros formularios.</p>
          </div>

          <div class="mb-4">
            <h4>2. Uso de la Información</h4>
            <ul>
              <li>Procesar pedidos y entregas.</li>
              <li>Brindar atención al cliente y soporte postventa.</li>
              <li>Enviar promociones, ofertas y novedades si das tu consentimiento.</li>
            </ul>
          </div>

          <div class="mb-4">
            <h4>3. Protección de Datos</h4>
            <p>Utilizamos protocolos seguros (SSL), medidas de cifrado y acceso restringido para proteger tu información contra accesos no autorizados o usos indebidos.</p>
          </div>

          <div class="mb-4">
            <h4>4. Compartir Información</h4>
            <p>No vendemos, alquilamos ni compartimos tus datos personales con terceros, excepto para cumplir con servicios logísticos o legales requeridos para completar tu compra.</p>
          </div>
        </div>
      </main>

      <!-- FOOTER -->
      <footer class="pt-4 my-md-5 pt-md-5 border-top">
        <div class="row">
          <div class="col-12 col-md">
            <img class="mb-2 logo" src="{{ asset('asset/images/Logo.png') }}" alt="Logo">
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
