<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Iniciar Sesión</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
  body {
    margin: 0;
    padding: 0;
    background-color: #d8b4fe;
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
    position: relative;
  }

  .card {
    z-index: 1;
    background-color: rgba(255, 255, 255, 0.95);
    padding: 2rem;
    border-radius: 15px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
    width: 100%;
    max-width: 400px;
  }

  .imagen-derecha {
    position: absolute;
    right: 30px;              /* Separación del borde derecho */
    top: 50%;                 /* Posición vertical al centro */
    transform: translateY(-50%); /* Alinear verticalmente al centro */
    width: 200px;             /* Ajusta el tamaño aquí */
    z-index: 0;
    opacity: 0.9;
  }

  @media (max-width: 768px) {
    .imagen-derecha {
      display: none;
    }
  }

</style>

  </head>
  <body>
    <!-- Imagen decorativa a la derecha -->
    <img src="dist/assets/img/conejo.png" alt="Conejo" class="imagen-derecha">

    <!-- Formulario centrado -->
    <div class="card">
      <h4 class="text-center mb-4">Iniciar Sesión</h4>
      <form method="POST" action="verificar.php">
        <div class="mb-3">
          <label for="correo" class="form-label">Correo Electrónico</label>
          <input type="email" class="form-control" name="correo" id="correo" required>
          <div id="emailHelp" class="form-text">Nunca compartiremos tu correo electrónico con nadie más.</div>
        </div>
        <div class="mb-3">
          <label for="pass" class="form-label">Contraseña</label>
          <input type="password" class="form-control" name="pass" id="pass" required>
        </div>
        <button type="submit" class="btn btn-primary w-100">Iniciar Sesión</button>
      </form>
      <a href="registro.php">¿No tienes cuenta? Regístrate aquí</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
