<?php
require "conexion.php";
$id= $_POST['id'];
$nombre = $_POST['nombre']; 
$apellido = $_POST['apellido']; 
$noTelefono = $_POST['noTelefono']; 
$direccion = $_POST['direccion']; 
$fechaNac = $_POST['fechaNac']; 
$grado = $_POST['grado']; 
$carrera = $_POST['carrera']; 
$nivel = $_POST['nivel']; 


$sql = "UPDATE estudiante SET nombre = '$nombre', apellido = '$apellido', noTelefono = '$noTelefono', direccion = 
'$direccion', fechaNac= '$fechaNac' , grado= '$grado' , carrera= '$carrera' ,  nivel= '$nivel', updateAt = now() WHERE id= '$id'" ;

if ($conn->query($sql) === TRUE) {
    header("Location: listar.php");
    exit(); // Asegurar que el script se detenga aquí
} else {
    echo "Error: " . $conn->error;
}
?>