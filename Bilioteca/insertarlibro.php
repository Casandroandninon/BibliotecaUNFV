<?php
include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$titulo=$_POST['titulo'];
$id_editorial=$_POST['id_editorial'];
$año=$_POST['año'];
$id_autor=$_POST['id_autor'];
$id_categoria=$_POST['id_categoria'];




$sql="INSERT INTO libro VALUES('$id','$titulo','$id_editorial','$año','$id_autor','$id_categoria')";
$query=mysqli_query($con,$sql);

if($query){
    Header("Location: libros.php");
    
}else {
}
?>