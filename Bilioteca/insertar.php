<?php
include("conexion.php");
$con=conectar();

$id_usuario=$_POST['codigo'];
$usuario=$_POST['nombre'];
$apellido=$_POST['apellido'];
$cargo=$_POST['cargo'];
$especialidad=$_POST['especialidad'];
$correo=$_POST['correo'];
$contraseña=$_POST['contraseña'];
$genero=$_POST['genero'];
$fecha_nacimiento=$_POST['fecha_nacimiento'];
$celular=$_POST['celular'];




$sql="INSERT INTO usuario VALUES('$id_usuario','$usuario','$apellido','$cargo','$especialidad','$contraseña','$correo','$genero','$fecha_nacimiento','$celular')";
$query=mysqli_query($con,$sql);

if($query){
    Header("Location: usu.php");
    
}else {
}
?>