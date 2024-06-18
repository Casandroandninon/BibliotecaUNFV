<?php

include("conexion.php");
$con=conectar();

$cod_usuario=$_GET['id'];

$sql="DELETE FROM libro  WHERE id='$cod_usuario'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: libros.php");
    }
?>
