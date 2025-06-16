<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registrar Usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos.css">
  </head>
  <body>
    <div class="container mt-5" style="max-width: 400px;">
      <h3 class="mb-4 text-center">Crear Nueva Cuenta</h3>
      <form method="POST" action="registrar.php">
        <div class="mb-3">
          <label for="correo" class="form-label">Correo Electrónico</label>
          <input type="email" class="form-control" name="correo" id="correo" required>
        </div>
        <div class="mb-3">
          <label for="pass" class="form-label">Contraseña</label>
          <input type="password" class="form-control" name="pass" id="pass" required>
        </div>
        <button type="submit" class="btn btn-primary w-100">Registrar</button>
      </form>
      <br>
      <a href="index.php" class="d-block text-center">¿Ya tienes cuenta? Inicia sesión</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
  </body>
</html>
