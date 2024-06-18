<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM usuario";
    $query=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> PAGINA PERSONA</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Ingrese datos</h1>
                                <form action="insertar.php" method="POST">

                                   <input type="text" class="form-control mb-3" name="codigo" placeholder="Codigo">
                                    <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre">
                                    <input type="text" class="form-control mb-3" name="apellido" placeholder="Apellidos">
                                    <input type="text" class="form-control mb-3" name="cargo" placeholder="Cargo">
									<input type="text" class="form-control mb-3" name="especialidad" placeholder="Especialidad">
									<input type="email" class="form-control mb-3" name="correo" placeholder="Correo">
									<input type="password" class="form-control mb-3" name="contraseña" placeholder="Contraseña">
									<input type="text" class="form-control mb-3" name="genero" placeholder="Genero">
									<input type="date" class="form-control mb-3" name="fecha_nacimiento" placeholder="Fecha de nacimiento">
									<input type="text" class="form-control mb-3" name="celular" placeholder="Celular">
									
                                    
                                    <input type="submit" class="btn btn-primary">
                                </form>
                        </div>
					

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
									    <th>Codigo</th>
                                        <th>Nombre</th>
                                        <th>Apellido</th>
										<th>Cargo</th>
                                        <th>Especialidad</th>
										<th>Correo</th>
										<th>Contraseña</th>
										<th>Genero</th>
										<th>Fecha de nacimiento</th>
										<th>Celular</th>
						
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['id_usuario']?></th>
                                                <th><?php  echo $row['usuario']?></th>
                                                <th><?php  echo $row['apellido']?></th>
                                                <th><?php  echo $row['cargo']?></th>
												<th><?php  echo $row['especialidad']?></th> 
												<th><?php  echo $row['correo']?></th>  
												<th><?php  echo $row['contraseña']?></th> 					
												<th><?php  echo $row['genero']?></th>  
												<th><?php  echo $row['fecha_nacimiento']?></th>  
												<th><?php  echo $row['celular']?></th>    
                                                <th><a href="actualizar.php?id=<?php echo $row['id_usuario'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['id_usuario'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>
	<a href="index.html">
                    menu principal
                </a>
				<a href="libros.php">
                    Sistema libros
                </a>