<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Registrarme · Click y Compra</title>
  <link href="{{ asset('asset/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('asset/css/estilos.css') }}" rel="stylesheet">
</head>
<body>
<main class="d-flex justify-content-center align-items-center vh-100 flex-column">
  <img src="{{ asset('asset/Images/Logo.png') }}" alt="Logo" style="width:120px;">
  <h2>Formulario de Registro</h2>

  <form class="login-form p-4 rounded shadow" id="registroForm" method="POST" action="{{ route('register') }}">
    @csrf

    <div class="mb-3">
      <label class="form-label">Primer Nombre</label>
      <input type="text" name="primer_nombre" class="form-control" value="{{ old('primer_nombre') }}" required>
    </div>

    <div class="mb-3">
      <label class="form-label">Segundo Nombre</label>
      <input type="text" name="segundo_nombre" class="form-control" value="{{ old('segundo_nombre') }}">
    </div>

    <div class="mb-3">
      <label class="form-label">Apellido(s)</label>
      <input type="text" name="apellidos" class="form-control" value="{{ old('apellidos') }}" required>
    </div>

    <div class="mb-3">
      <label class="form-label">Correo</label>
      <input type="email" name="correo" class="form-control" value="{{ old('correo') }}" required>
      @error('correo') <div class="text-danger small">{{ $message }}</div> @enderror
    </div>

    <div class="mb-3">
      <label class="form-label">Contraseña</label>
      <input type="password" name="contrasena" class="form-control" required>
      @error('contrasena') <div class="text-danger small">{{ $message }}</div> @enderror
    </div>

    <div class="mb-3">
      <label class="form-label">Confirmar Contraseña</label>
      <input type="password" name="contrasena_confirmation" class="form-control" required>
    </div>

    <div class="mb-3">
      <label class="form-label">Teléfono</label>
      <input type="tel" name="telefono" class="form-control" value="{{ old('telefono') }}">
    </div>

    <div class="d-grid">
      <button type="submit" class="btn btn-primary">Registrar</button>
    </div>
  </form>
</main>

<script src="{{ asset('asset/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
