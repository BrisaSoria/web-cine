<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<link rel="stylesheet" href="interfaz.css">
</head>
<body>

	


	
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	  <div class="container-fluid">
	    <a class="navbar-brand" href="#">CINEHOME</a>
	    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
	      <div class="navbar-nav ms-auto">
	        <a class="nav-link active" aria-current="page" href="#">Inicio</a>
	        <a class="nav-link" href="listar01.php">Peliculas</a>
	        <a class="nav-link" href="buscarconsulta.php">Buscar</a>
	        <a class="nav-link" href="#">Pedidos</a>
	        <a class="nav-link" href="login.php">Cerrar Session</a>
	        

	      </div>
	    </div>
	  </div>
	</nav>
	<div class="container my-3">
		<div class="row">
			<div class="col-sm-10   py-4 bg-white">	
				<h2>Añadir Peliculas</h2>
				<form action="altas01.php" method="post" enctype="multipart/form-data">
					<div class="mb-1">
				  		<label for="titulo" class="form-label">Pelicula</label>
				  		<input type="text" class="form-control" name="titulo" placeholder="Titulo" autofocus>
					</div>

					<div class="mb-1">
			  			<label for="genero" class="form-label">Género</label>
			  			<select name="idGenero" class="form-control">
			  				<?php 
								$conexion=mysqli_connect("localhost","root","soriabv24","cinema");

								$registros=mysqli_query($conexion,"SELECT id, nombre FROM genero") or die("problemas con el select:".mysqli_error($conexion));

								while($reg=mysqli_fetch_array($registros)){
									echo "<option value=\"$reg[id]\">$reg[nombre]</option>";
								}
							?>
			  				
			  			</select>
			  			
					</div>

					<div class="mb-1">
			  			<label for="fecha_estreno" class="form-label">Fecha de estreno</label>
			  			<input type="date" class="form-control" name="fecha_estreno">
					</div>

					<div class="mb-1">
			  			<label for="sinopsis" class="form-label">Sinopsis</label>
			  			<textarea class="form-control" name="sinopsis" rows="3"></textarea>
					</div>

					<div class="mb-1">
			  			<label for="foto" class="form-label">Portada</label>
			  			<input type="file" class="form-control" name="foto">
					</div>

					<div class="mb-1">
			  			<label for="cine" class="form-label">Cine</label>
			  			<select name="idCine" class="form-control">
			  				<?php 
			     	 			$conexion=mysqli_connect("localhost","root","soriabv24", "cinema");
			     	 			$registros=mysqli_query($conexion, "SELECT id, nombre FROM cines") or die ("Problemas con el select:".mysqli_error($conexion));

			     	 			while ($reg=mysqli_fetch_array($registros)){
			     	 				echo "<option value=\"$reg[id]\">$reg[nombre]</option>";
			     	 			}
	     	 				?>	
			  			</select>
			  			
					</div>

					<div class="mb-1">
			  			<label for="director" class="form-label">Director</label>
			  			<input type="text" class="form-control" name="director">
					</div>

					<div class="mb-1">
			  			<label for="precio" class="form-label">Precio</label>
			  			<input type="text" class="form-control" name="precio" placeholder="0.00">
					</div>
					<hr>



					<div class="d-grid gap-2">
						<button type="submit" class="btn btn-primary">Registrar</button>
						<button  class="btn btn-secondary">Limpiar</button>
					</div>

				</form>
			</div>
				
		</div>	
	</div>
    

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>