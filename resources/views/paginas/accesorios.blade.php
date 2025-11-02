<!doctype html>
<html lang="es" data-bs-theme="auto">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ropa - Click y Compra</title>

    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link href="{{ asset('asset/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('asset/css/estilo.css') }}" rel="stylesheet">
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
            <img src="{{ asset('asset/images/Logo.png') }}" class="logo mt-1" alt="Logo">
          </div>
          <nav class="d-flex gap-4">
            <a class="fs-5 link-body-emphasis text-decoration-none" href="{{ route('suplementacion') }}">Suplementación</a>
            <a class="fs-5 link-body-emphasis text-decoration-none" href="{{ route('ropa') }}">Ropa</a>
            <a class="fs-5 link-body-emphasis text-decoration-none" href="{{ route('accesorios') }}">Accesorios</a>
            <a class="fs-5 link-body-emphasis text-decoration-none" href="{{ route('register') }}">Inicia sesión</a>
          </nav>
        </div>

        <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
          <h1 class="display-4 fw-normal text-body-emphasis">Click y Compra</h1>
          <p class="fs-5 text-body-secondary"> En este sitio web, podrás encontrar los mejores productos de la más alta calidad </p>
        </div>
      </header>

      <main>
        <!-- Sección de Venta -->
        <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center mb-5">
          <!-- Producto 1 -->
          <div class="col-md-4">
            <div class="py-3">
              <h4 class="fw-bold text-center">Mancuernas Ajustables</h4>
              <div class="text-center">
                <img src="{{ asset('asset/images/Mancuernas_ajustables.png') }}" class="imagen-accesorios mb-3" alt="Mancuernas Ajustables">
                <p class="text-muted">Ideales para entrenamientos de fuerza en casa.</p>
                <p><strong>Precio: $450 COL</strong></p>
                <label for="cantidad1" class="form-label">Cantidad:</label>
                <input type="number" id="cantidad1" class="form-control text-center mb-2" value="1" min="1" max="10" style="width: 100px; margin: 0 auto;">
                <button class="btn btn-primary">Agregar al carrito</button>
              </div>
            </div>
          </div>

          <!-- Producto 2 -->
          <div class="col-md-4">
            <div class="py-3">
              <h4 class="fw-bold text-center">Banda de Resistencia</h4>
              <div class="text-center">
                <img src="{{ asset('asset/images/Banda de resistencia.png') }}" class="imagen-accesorios mb-3" alt="Banda de Resistencia">
                <p class="text-muted">Perfecta para calentamientos y estiramientos.</p>
                <p><strong>Precio: $120 COL</strong></p>
                <label for="cantidad2" class="form-label">Cantidad:</label>
                <input type="number" id="cantidad2" class="form-control text-center mb-2" value="1" min="1" max="10" style="width: 100px; margin: 0 auto;">
                <button class="btn btn-primary">Agregar al carrito</button>
              </div>
            </div>
          </div>

          <!-- Producto 3 -->
          <div class="col-md-4">
            <div class="py-3">
              <h4 class="fw-bold text-center">Cuerda para Saltar</h4>
              <div class="text-center">
                <img src="{{ asset('asset/images/Cuerda_para_saltar.png') }}" class="imagen-accesorios mb-3" alt="Cuerda para Saltar">
                <p class="text-muted">Ideal para cardio y coordinación.</p>
                <p><strong>Precio: $95 COL</strong></p>
                <label for="cantidad3" class="form-label">Cantidad:</label>
                <input type="number" id="cantidad3" class="form-control text-center mb-2" value="1" min="1" max="10" style="width: 100px; margin: 0 auto;">
                <button class="btn btn-primary">Agregar al carrito</button>
              </div>
            </div>
          </div>

          <!-- Producto 4 -->
          <div class="col-md-4">
            <div class="py-3">
              <h4 class="fw-bold text-center">Esterilla de Yoga</h4>
              <div class="text-center">
                <img src="{{ asset('asset/images/Esterilla de yoga.png') }}" class="imagen-accesorios mb-3" alt="Esterilla de Yoga">
                <p class="text-muted">Confortable y antideslizante.</p>
                <p><strong>Precio: $320 COL</strong></p>
                <label for="cantidad4" class="form-label">Cantidad:</label>
                <input type="number" id="cantidad4" class="form-control text-center mb-2" value="1" min="1" max="10" style="width: 100px; margin: 0 auto;">
                <button class="btn btn-primary">Agregar al carrito</button>
              </div>
            </div>
          </div>

          <!-- Producto 5 -->
          <div class="col-md-4">
            <div class="py-3">
              <h4 class="fw-bold text-center">Balón Medicinal</h4>
              <div class="text-center">
                <img src="{{ asset('asset/images/Balon medicinal.png') }}" class="imagen-accesorios mb-3" alt="Balón Medicinal">
                <p class="text-muted">Perfecto para ejercicios funcionales.</p>
                <p><strong>Precio: $390 COL</strong></p>
                <label for="cantidad5" class="form-label">Cantidad:</label>
                <input type="number" id="cantidad5" class="form-control text-center mb-2" value="1" min="1" max="10" style="width: 100px; margin: 0 auto;">
                <button class="btn btn-primary">Agregar al carrito</button>
              </div>
            </div>
          </div>

          <!-- Producto 6 -->
          <div class="col-md-4">
            <div class="py-3">
              <h4 class="fw-bold text-center">Rodillo de Espuma</h4>
              <div class="text-center">
                <img src="{{ asset('asset/images/Rodillo_de_espuma.png') }}" class="imagen-accesorios mb-3" alt="Rodillo de Espuma">
                <p class="text-muted">Excelente para recuperación muscular.</p>
                <p><strong>Precio: $210 COL</strong></p>
                <label for="cantidad6" class="form-label">Cantidad:</label>
                <input type="number" id="cantidad6" class="form-control text-center mb-2" value="1" min="1" max="10" style="width: 100px; margin: 0 auto;">
                <button class="btn btn-primary">Agregar al carrito</button>
              </div>
            </div>
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
              <li class="mb-1"><a class="link-secondary text-decoration-none" href="{{ route('ubicacion') }}">Ubicaciones</a></li>
              <li class="mb-1"><a class="link-secondary text-decoration-none" href="{{ route('politica') }}">Política de Privacidad</a></li>
              <li class="mb-1"><a class="link-secondary text-decoration-none" href="{{ route('terminos') }}">Términos y Condiciones</a></li>
            </ul>
          </div>
        </div>
      </footer>
    </div>

    <!-- JS -->
    <script src="{{ asset('asset/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('asset/js/color-modes.js') }}"></script>
    <script src="{{ asset('asset/js/login.js') }}"></script>
    <script src="{{ asset('asset/js/validacion_contraseña.js') }}"></script>
  </body>
</html>
