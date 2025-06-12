<?php
require "conexion.php";

$nombre = trim($_POST['nombre']);
$apellido = trim($_POST['apellido']);
$telefono = trim($_POST['telefono']);
$fechaNacimiento = trim($_POST['fecha']);
$direccion = trim($_POST['direccion']);
$grado = trim($_POST['grado']);
$carrera = trim($_POST['carrera']);
$nivel = trim($_POST['nivel']);
$estado = trim($_POST['estado']);
if ( 
$nombre === "" || $telefono === ""
) {
  // No insertar en la base de datos
    header("Location: index.php?error=1");
    echo '<script> 
        alert("El campo de nombre y telefono no pueden estar en blanco");
        window.location = "tables.php";
        </script>';
    exit();
}

$sql = "INSERT INTO estudiante(nombre, apellido, direccion, noTelefono, fechaNac, grado, carrera, nivel, estado, createAt ) 
values ('$nombre', '$apellido', '$direccion', '$telefono', '$fechaNacimiento', '$grado', '$carrera', '$nivel',  '$estado', now() )";

if ($conn->query($sql) === TRUE) {
    header("Location: registro.php");
    exit(); // Asegurar que el script se detenga aquí
} else {
    echo "Error: " . $conn->error;
}
?>