<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM libro";
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
                                <form action="insertarlibro.php" method="POST">

                                   <input type="text" class="form-control mb-3" name="titulo" placeholder="Nombre del libro">
                                    <input type="text" class="form-control mb-3" name="id_editorial" placeholder="Codigo de editorial">
                                    <input type="text" class="form-control mb-3" name="año" placeholder="Año">
                                    <input type="text" class="form-control mb-3" name="id_autor" placeholder="Codigo de autor">
									<input type="text" class="form-control mb-3" name="id_categoria" placeholder="codigo de categoria">
								
                                    
                                    <input type="submit" class="btn btn-primary">
                                </form>
                        </div>
					

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
									    <th>Codigo</th>
									    <th>Titulo</th>
                                        <th>Codigo de editorial</th>
                                        <th>Año</th>
										<th>Codigo de autor</th>
                                        <th>Codigo de categoria</th>
										
						
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['id']?></th>
                                                <th><?php  echo $row['titulo']?></th>
                                                <th><?php  echo $row['id_editorial']?></th>
                                                <th><?php  echo $row['año']?></th>
												<th><?php  echo $row['id_autor']?></th> 
												<th><?php  echo $row['id_categoria']?></th>  
										
                                                <th><a href="actualizarlibros.php?id=<?php echo $row['id'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="deletelibro.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
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