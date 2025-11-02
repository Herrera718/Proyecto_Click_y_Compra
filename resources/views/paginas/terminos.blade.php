<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Términos y Condiciones · Click y Compra</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles -->
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
            <img src="{{ asset('asset/images/Logo.png') }}" class="logo mt-1" alt="Logo">
          </div>

          <!-- Menú principal -->
          <nav class="d-flex gap-4">
            <a class="fs-5 link-body-emphasis text-decoration-none" href="{{ route('suplementacion') }}">Suplementación</a>
            <a class="fs-5 link-body-emphasis text-decoration-none" href="{{ route('ropa') }}">Ropa</a>
            <a class="fs-5 link-body-emphasis text-decoration-none" href="{{ route('accesorios') }}">Accesorios</a>
            <a class="fs-5 link-body-emphasis text-decoration-none" href="{{ route('register') }}">Inicia sesión</a>
          </nav>
        </div>

        <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
          <h1 class="display-4 fw-normal text-body-emphasis">Términos y Condiciones</h1>
        </div>
      </header>

      <main>
        <div class="container py-5">
          <p class="lead text-center mb-5">
            Bienvenido a Rincón del Deporte. Al utilizar este sitio web, aceptas los siguientes términos y condiciones que regulan el uso de nuestra tienda en línea de ropa, accesorios y suplementos deportivos.
          </p>

          <div class="mb-4">
            <h4>1. Información General</h4>
            <p>Rincón del Deporte es un sitio de comercio electrónico dedicado a la venta de productos deportivos como ropa de entrenamiento, accesorios funcionales y suplementos nutricionales. Nos comprometemos a proporcionar información clara, precios actualizados y un servicio eficiente.</p>
          </div>

          <div class="mb-4">
            <h4>2. Condiciones de Compra</h4>
            <ul>
              <li>Los precios están expresados en pesos colombianos (COL) e incluyen impuestos.</li>
              <li>Las compras están sujetas a disponibilidad de inventario.</li>
              <li>Nos reservamos el derecho de cancelar pedidos por errores en precios o stock.</li>
            </ul>
          </div>

          <div class="mb-4">
            <h4>3. Envíos y Entregas</h4>
            <ul>
              <li>Los envíos se realizan en días hábiles y se entregan dentro del plazo indicado al momento de la compra.</li>
              <li>El cliente es responsable de proporcionar una dirección correcta y completa.</li>
            </ul>
          </div>

          <div class="mb-4">
            <h4>4. Devoluciones y Cambios</h4>
            <ul>
              <li>Los cambios se aceptan dentro de los primeros 7 días luego de recibir el producto.</li>
              <li>El producto debe estar sin uso, en su empaque original y con etiquetas.</li>
              <li>Los suplementos no tienen cambio por razones de seguridad alimentaria, salvo error en el envío.</li>
            </ul>
          </div>

          <div class="mb-4">
            <h4>5. Privacidad y Seguridad</h4>
            <p>Toda la información proporcionada por el cliente es confidencial y será utilizada exclusivamente para procesar pedidos y mejorar la experiencia de usuario. No compartimos datos con terceros sin consentimiento.</p>
          </div>
        </div>
      </main>

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
              <li class="mb-1"><a class="link-secondary text-decoration-none" href="{{ route('ubicacion') }}">Ubicación</a></li>
              <li class="mb-1"><a class="link-secondary text-decoration-none" href="{{ route('politica') }}">Política de Privacidad</a></li>
              <li class="mb-1"><a class="link-secondary text-decoration-none" href="{{ route('terminos') }}">Términos y Condiciones</a></li>
            </ul>
          </div>
        </div>
      </footer>
    </div>

    <!-- Bootstrap JS  -->
     <script src="{{ asset('asset/js/bootstrap.bundle.min.js') }}"></script>
  </body>
</html>
