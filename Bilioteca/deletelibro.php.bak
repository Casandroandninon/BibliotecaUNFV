<?php

include("conexion.php");
$con=conectar();

$cod_usuario=$_GET['id'];

$sql="DELETE FROM usuario  WHERE id_usuario='$cod_usuario'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: usu.php");
    }
?>
