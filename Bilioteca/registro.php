<html>
    <head>
       <title>Registro</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="shortcut icon" href="fotos/amor.ico"/>
		<style>
	
*
{
    margin: 0px;
    padding: 0px;
    box-sizing: border-box;
}

body
{
    background-color: #cc640f;
}

.main
{
    width: 900px;
    height: 728px;
    margin-left: 340px;
    margin-top: 30px;
    background-color: white;
    border-radius: 10px ; 
    box-shadow: 0 1rem 3rem rgb(0 0 0 / 18%)
}

.contenedorIzquierda
{
    float: left;
    background-color:#f3ab1c;
    border-top-left-radius: 9px;
    border-bottom-left-radius: 9px;
	width: 50%;
}

.logoRegistro
{
    width:100%;
    margin-top: 273px;
    margin-bottom: 272px;
	
}

.contenedorRegistro
{
    width: 50%;
    float: right;
}

.logoUNFV
{
    width: 350px;
    margin-top: 10px;
    margin-left:46px;

}

.formulario
{
	margin-left: 30px;
}

h1
{
	text-align: center;
	margin-bottom: 20px;
}

h1, label, a
{
    font-family: "Nunito", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
}

.cajasTexto, select, input[type = date]
{
    padding: 8px 15px;
    width: 350px;
    margin: 5px;
    border-radius: 30px;
    border: 1px solid #d0d3e3;
	margin-left:20px;
}

input[type = radio]
{
    float: left;
    margin-top: 5px;
    margin-right: 10px;
}

#nacimiento
{
	margin-left:25px;
}

.iniciarSesion
{
	float:right;
	margin-top:20px;
	margin-right:55px;
}

.iniciarSesion a
{
    text-decoration: none;
    color: #797c81;;
}

.iniciarSesion a:hover
{
    text-decoration: underline;
    color:#505052;
}

.iniciarSesion a:active
{
    text-decoration: underline;
    color:#8f8f99;
}


input[type = submit]
{
    float: left;
    margin-top: 15px;
    margin-left: 25px;
	background-color: #f17612;
	border-radius: 30px;
	border:0;
    padding: 8px 70px;
    color: white;
}

input[type = submit]:hover
{
    background-color: #cc640f;
    font-size: 15px;
}

input[type = submit]:active
{
    background-color: #ff933b;
}
	
	</style>
	
    </head>
    <body>
	<main class="main">
	
        <div class="contenedorIzquierda">

             <img class="logoRegistro" src="https://blog.teachlr.com/wp-content/uploads/2017/03/Laptop_learn.jpg" alt="Logo Inicio De Sesion">
			
		</div>
		
	<div class="contenedorRegistro">
	
		<img class="logoUNFV" src="https://upload.wikimedia.org/wikipedia/commons/b/b5/Logo_UNFV.png" alt="Logo UNFV">
	
	<MARQUEE> Formulario de registro </MARQUEE>
    <center><h2><font color="black">Registro al sistema</font></h2></center>  
	
	
	<center><form action="form.php" method="post"> 
	<label for="iname">Nombre:</label>
	<input id="iname" type="text" name="name" required><br>
	
	<label for="isurname">Apellido:</label>
	<input id="isurname" type="text" name="surname" required><br>
	
	<select class="seleccion" name="cargo" required>
				<option selected hidden value="">-------------------------------Cargo-------------------------------</option>
				<option value="alumno">Alumno</option>
				<option value="profesor">Profesor</option>
				<option value="administrativo">Administrativo</option>
			</select>
<br><br>

<select class="seleccion" name="especialidad" required>
				<option selected hidden value="">--------------------------Especialidad---------------------------</option>
				<option value="sistemas">Sistemas</option>
				<option value="industrial">Industrial</option>
				<option value="agroindustrial">Agroindustrial</option>
				<option value="transporte">Transportes</option>
				<option value="otra">Otra carrera</option>
				<option value="usuarioexterno">Usuario externo</option>
			</select>

<br><br>

	<label for="icontraseña">Contraseña:</label>
	<input id="icontraseña" type="password" name="contraseña" required><br>
	
	<label for="icontraseña">Repita la contraseña:</label>
	<input id="iacontraseña" type="password" name="pass" required><br>
	
	<label for="iemail">Correo electronico:</label>
	<input id="iemail" type="email" name="email" required><br>
	 
<select class="seleccion" name="genero" required>
				<option selected hidden value="">-------------------------Género-------------------------</option>
				<option value="masculino">Masculino</option>
				<option value="femenino">Femenino</option>
			</select>
</p>

	
	<label for="ifecha">Fecha de nacimiento:</label>
	<input id="ifecha" type="date" name="fecha" required><br>
	
	
	<label for="icel">Celular:</label>
	<input id="icel" type="text" name="cel"  required><br><br>
	
	<input type="submit"  value="enviar" />
	
	</form>
	<?php
	if(isset($_POST['submit'])){
	require("form.php");}
	?>
	</center>
</div>
</main>
</body>
</html>