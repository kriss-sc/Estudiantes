<?php 
    include("conexion.php");
    $id = $_GET["id"];
    $sql = "DELETE FROM estudiante WHERE id='$id'";
    $res = mysqli_query($conn, $sql);
    if($res){
        header("Location:listar.php");
    }else{
    }
    
?>