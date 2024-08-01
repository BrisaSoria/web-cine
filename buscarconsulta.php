<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<link rel="stylesheet" href="interfaz.css">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	  <div class="container-fluid">
	    <a class="navbar-brand" href="index.php">CINEHOME</a>
	    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
	      <div class="navbar-nav ms-auto">
	        <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
	        <a class="nav-link" href="listar01.php">Peliculas</a>
	        <a class="nav-link" href="buscarconsulta.php">Buscar</a>
	        <a class="nav-link" href="#">Pedidos</a>
	        <a class="nav-link" href="login.php">Cerrar Session</a>
	        

	      </div>
	    </div>
	  </div>
	</nav>

	<div class="container my-3">

		<div class="alert alert-dark" role="alert">
		   <h2>Buscar Peliculas</h2>
   
   </div>


                
				<form action="buscar.php" method="post" class="row g-12" enctype="multipart/form-data">
				    
				 <h2>Por titulo</h2>  
				 <div class="col-auto">
				    <label for="titulo" class="visually-hidden">Titulo</label>
				    <input type="text" class="form-control" name="titulo" placeholder="Ingrese el titulo de la pelicula">
				  </div>
				  <div class="col-auto">
				    <button type="submit" class="btn btn-primary mb-3">Buscar</button>
				  </div>
				</form>
				<hr>

				
				<form action="buscarGe.php" method="post" class="row g-12" enctype="multipart/form-data">
				    
				  
				 <div class="col-auto">
				    <h2>Seleccione el Género</h2>

					<select name="idGenero">
				        	<?php
				        		$conexion=mysqli_connect("localhost","root","soriabv24","cinema");

								$registros=mysqli_query($conexion,"SELECT id, nombre FROM genero") or die("problemas con el select:".mysql_error($conexion));

								while($reg=mysqli_fetch_array($registros)){
									echo "<option value=\"$reg[id]\">$reg[nombre]</option>";
								}
							?>
					</select>
					<br>



				  </div>
				  <div class="col-auto">
				    <button type="submit" class="btn btn-primary mb-3">Buscar</button>
				  </div>
				</form>

				<hr>

				<form action="buscarDir.php" method="post" class="row g-12" enctype="multipart/form-data">
				    
				 <h2>Por Director</h2>  
				 <div class="col-auto">
				    <label for="director" class="visually-hidden">Director</label>
				    <input type="text" class="form-control" name="director" placeholder="Ingrese el nombre del Director">
				  </div>
				  <div class="col-auto">
				    <button type="submit" class="btn btn-primary mb-3">Buscar</button>
				  </div>
				</form>


	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>