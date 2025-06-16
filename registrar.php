<?php
include "dist/pages/conexion.php"; // Asegúrate de que la ruta sea correcta

if (empty($_POST['correo']) || empty($_POST['pass'])) {
    echo "<script>
        alert('Por favor completa todos los campos');
        window.location='registro.php';
    </script>";
    exit;
}

$correo = $_POST['correo'];
$pass = hash('sha512', $_POST['pass']);

// Verificar si el correo ya existe
$stmt = $conn->prepare("SELECT * FROM Usuarios WHERE correo = ?");
$stmt->bind_param("s", $correo);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    echo "<script>
        alert('El correo ya está registrado');
        window.location='registro.php';
    </script>";
    exit;
}
$stmt->close();

// Insertar nuevo usuario
$stmt = $conn->prepare("INSERT INTO Usuarios (correo, pass) VALUES (?, ?)");
$stmt->bind_param("ss", $correo, $pass);

if ($stmt->execute()) {
    // Redirección directa sin mostrar mensaje
    header("Location: login.php");
    exit;
} else {
    echo "<script>
        alert('Error al registrar usuario. Inténtalo de nuevo.');
        window.location='registro.php';
    </script>";
    exit;
}

$stmt->close();
$conn->close();
?>
