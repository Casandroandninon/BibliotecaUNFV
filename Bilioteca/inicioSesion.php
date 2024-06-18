

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

    <main class="main">

        <div class="contieneLogoComputadora">

            <img class="logoInicioSesion" src="../img/logo_InicioDeSesion.png" alt="Logo Inicio De Sesion">

        </div>

        <div class="contenedorInicioSesion">

            <img class="logoUNFV" src="../img/Logo_UNFV.png" alt="Logo UNFV">

            <h1>
                Ingreso a la Biblioteca Virtual
            </h1>

            <form class="formulario" action="validar.php" method="post">

               

                <input type="text" class="cajasTexto" placeholder="Córreo Institucional" id="usuario" name="usuario">

                <br/>

                <input style="margin-bottom: 60px;" type="password" class="cajasTexto" placeholder="Contraseña" id="contraseña" name="contraseña">



<center><input type="submit" value="Ingresar"></center>
             
			   
			  
            </form>

            <div class="registrarse">
                <a href="http://localhost/final/registro.php">
                    ¿Aún no tiene cuenta?
                </a>
				<br><br>
				<a href="usu.php">
                    Ingrese como administrativo
                </a>
            </div>

        </div>

    </main>

  </body>

</html>
