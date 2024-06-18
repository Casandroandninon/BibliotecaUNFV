<?php
	include_once('connect_db.php');
$nombre=$_POST['name'];
$apellido=$_POST['surname'];
$cargo=$_POST['cargo'];
$especialidad=$_POST['especialidad'];
$contraseña=$_POST['contraseña'];
$rcontraseña=$_POST['pass'];
$email=$_POST['email'];
$genero=$_POST['genero'];
$fecha=$_POST['fecha'];
$celular=$_POST['cel'];


$reqlen= strlen($nombre)*strlen($apellido)*strlen($cargo)*strlen($especialidad)*strlen($contraseña)
*strlen($rcontraseña)*strlen($email)*strlen($genero)*strlen($fecha)*strlen($celular);
$arrayAsociativo=array('exito'=>'Se registro exitoxamente');
if($reqlen>0){
	if($contraseña===$rcontraseña){
		$conectar=conn();
		$sql="INSERT INTO usuario(id_usuario,usuario,apellido,cargo,especialidad,contraseña,correo,genero,fecha_nacimiento,celular)
		VALUES ('','$nombre','$apellido',
		'$cargo','$especialidad','$contraseña','$email','$genero',
		'$fecha','$celular')";
		$resul=mysqli_query($conectar ,$sql) or trigger_error("Query Failed! SQL-Error:".mysqli_error($conectar), E_USER_ERROR);
		echo "$sql";
		
		echo $arrayAsociativo['exito'];
		
	}else{
		echo 'Por favor,introduzca contraseñas identicas.';
	}
	}
else{
		echo 'Por favor, rellene todos los campos requeridos.';
}

?>
	
	<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../CSS/estilosInicioSesion.css">
    <title>
        Inicio de Sesión
    </title>

  </head>
  

  <body>

    

  <center> <a href="index.html"><h1>Ir a la pagina pricipal</h1></a></center>
	

  </body>

</html>
