<?php
include "dist/pages/conexion.php"; // Asegúrate de que la ruta sea correcta

session_start();

if (empty($_POST['correo']) || empty($_POST['pass'])) {
    echo "<script>
        alert('Por favor completa todos los campos');
        window.location='login.php';
    </script>";
    exit;
}

$correo = $_POST['correo'];
$pass = hash('sha512', $_POST['pass']);

$sql = $conn->prepare("SELECT * FROM Usuarios WHERE correo = ? AND pass = ?");
$sql->bind_param("ss", $correo, $pass);
$sql->execute();
$result = $sql->get_result();

if ($result->num_rows > 0) {
    $_SESSION['usuario'] = $correo;
    header("Location: dist/pages/index.php");  // CORRECCIÓN AQUÍ: ruta correcta con slash /
    exit;
} else {
    echo "<script>
        alert('Correo o contraseña incorrectos');
        window.location='login.php';
    </script>";
    exit;
}
?>
