<!doctype html>
<html lang="es" data-bs-theme="auto">
  <head>
    <!-- JS (head) -->
    <script src="{{ asset('asset/js/color-modes.js') }}"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Suplementación - Click y Compra</title>

    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link href="{{ asset('asset/css/bootstrap.min.css') }}" rel="stylesheet">
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
            <img src="{{ asset('asset/images/Logo.png') }}" class="logo mt-1" alt="Logo Rincón del Deporte">
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
          <p class="fs-5 text-body-secondary">En este sitio web, podrás encontrar los mejores productos de la más alta calidad.</p>
        </div>
      </header>

      <main>
        <!-- Sección de Venta -->
        <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center mb-5">
          <!-- Producto 1 -->
          <div class="col-md-4">
            <div class="py-3 producto">
              <h4 class="fw-bold text-center">Proteína Whey Pro</h4>
              <div class="text-center">
                <img src="{{ asset('asset/images/Proteina-Quicken-Whey-Pro-1000-g.png') }}" class="imagen-accesorios mb-3" alt="Proteína Whey">
                <p class="text-muted">Suplemento esencial para ganar masa muscular.</p>
                <p class="precio"><strong>Precio: $890 COL</strong></p>
                <label for="cantidad1" class="form-label">Cantidad:</label>
                <input type="number" id="cantidad1" class="form-control text-center mb-2" value="1" min="1" max="10" style="width: 60px; margin: 0 auto; font-size: 0.8rem; height: 30px;">
                <button class="btn btn-primary">Agregar al carrito</button>
              </div>
            </div>
          </div>

          <!-- Producto 2 -->
          <div class="col-md-4">
            <div class="py-3 producto">
              <h4 class="fw-bold text-center">Creatina Monohidratada</h4>
              <div class="text-center">
                <img src="{{ asset('asset/images/Creatina_suplemento.png') }}" class="imagen-accesorios mb-3" alt="Creatina">
                <p class="text-muted">Aumenta tu fuerza y rendimiento físico.</p>
                <p class="precio"><strong>Precio: $290 COL</strong></p>
                <label for="cantidad2" class="form-label">Cantidad:</label>
                <input type="number" id="cantidad2" class="form-control text-center mb-2" value="1" min="1" max="10" style="width: 60px; margin: 0 auto; font-size: 0.8rem; height: 30px;">
                <button class="btn btn-primary">Agregar al carrito</button>
              </div>
            </div>
          </div>

          <!-- Producto 3 -->
          <div class="col-md-4">
            <div class="py-3 producto">
              <h4 class="fw-bold text-center">Aminoácidos BCAA</h4>
              <div class="text-center">
                <img src="{{ asset('asset/images/Aminoacido.png') }}" class="imagen-accesorios mb-3" alt="BCAA">
                <p class="text-muted">Mejora la recuperación muscular post entrenamiento.</p>
                <p class="precio"><strong>Precio: $310 COL</strong></p>
                <label for="cantidad3" class="form-label">Cantidad:</label>
                <input type="number" id="cantidad3" class="form-control text-center mb-2" value="1" min="1" max="10" style="width: 60px; margin: 0 auto; font-size: 0.8rem; height: 30px;">
                <button class="btn btn-primary">Agregar al carrito</button>
              </div>
            </div>
          </div>

          <!-- Producto 4 -->
          <div class="col-md-4">
            <div class="py-3 producto">
              <h4 class="fw-bold text-center">Pre-entreno Extreme</h4>
              <div class="text-center">
                <img src="{{ asset('asset/images/Pre-entreno.png') }}" class="imagen-accesorios mb-3" alt="Pre-entreno">
                <p class="text-muted">Energía explosiva y enfoque mental antes de entrenar.</p>
                <p class="precio"><strong>Precio: $410 COL</strong></p>
                <label for="cantidad4" class="form-label">Cantidad:</label>
                <input type="number" id="cantidad4" class="form-control text-center mb-2" value="1" min="1" max="10" style="width: 60px; margin: 0 auto; font-size: 0.8rem; height: 30px;">
                <button class="btn btn-primary">Agregar al carrito</button>
              </div>
            </div>
          </div>

          <!-- Producto 5 -->
          <div class="col-md-4">
            <div class="py-3 producto">
              <h4 class="fw-bold text-center">Multivitamínico Deportivo</h4>
              <div class="text-center">
                <img src="{{ asset('asset/images/Multivitaminico.png') }}" class="imagen-accesorios mb-3" alt="Multivitamínico">
                <p class="text-muted">Refuerza tu salud y rendimiento físico diario.</p>
                <p class="precio"><strong>Precio: $190 COL</strong></p>
                <label for="cantidad5" class="form-label">Cantidad:</label>
                <input type="number" id="cantidad5" class="form-control text-center mb-2" value="1" min="1" max="10" style="width: 60px; margin: 0 auto; font-size: 0.8rem; height: 30px;">
                <button class="btn btn-primary">Agregar al carrito</button>
              </div>
            </div>
          </div>

          <!-- Producto 6 -->
          <div class="col-md-4">
            <div class="py-3 producto">
              <h4 class="fw-bold text-center">Glutamina 500g</h4>
              <div class="text-center">
                <img src="{{ asset('asset/images/Glutamina.png') }}" class="imagen-accesorios mb-3" alt="Glutamina">
                <p class="text-muted">Apoya la recuperación y fortalece el sistema inmune.</p>
                <p class="precio"><strong>Precio: $270 COL</strong></p>
                <label for="cantidad6" class="form-label">Cantidad:</label>
                <input type="number" id="cantidad6" class="form-control text-center mb-2" value="1" min="1" max="10" style="width: 60px; margin: 0 auto; font-size: 0.8rem; height: 30px;">
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

    <!-- JS  -->
    <script src="{{ asset('asset/js/bootstrap.bundle.min.js') }}"></script>
  </body>
</html>
