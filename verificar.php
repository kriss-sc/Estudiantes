<?php
include "conexion.php";
$correo = $_POST['correo'];
$pass = hash('sha512', $_POST['pass']);
$sql = mysqli_query($conn, "SELECT * FROM usuarios WHERE
correo = '$correo' AND pass = '$pass'");

session_start();
if(mysqli_num_rows($sql)>0){
    $_SESSION['codlog'] = $correo;
    header("Location: index.php");
    exit;

}else{
echo '
<script>
alert("Correo/Contraseña invalidos");
window.location = "login.php"
</script>
';
}
?>