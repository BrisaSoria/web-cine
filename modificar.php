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
		<div class="row">
			<?php


					$conexion=mysqli_connect("localhost","root","soriabv24","cinema");
					$registros=mysqli_query($conexion, "SELECT * FROM peliculas where id='$_REQUEST[id]'") or die ("Problemas con el select: ".mysqli_error($conexion));

						if ($reg=mysqli_fetch_array($registros)) {
							?>
				

					<div class="col-sm-10 py-4 bg-white ">	
						<h2>Modificar Peliculas</h2>
						<form action="modificar02.php" method="post">
							<div class="mb-1">
						  		<label for="titulo" class="form-label">Titulo:</label>
						  		<input type="text" class="form-control" name="tituloNuevo" value="<?php echo $reg['titulo']?>" placeholder="Pelicula" autofocus>
							</div>

							<div class="mb-1">
					  			<label for="genero" class="form-label">Género:</label>
					  			<select name="idGeneroNuevo" class="form-control">
					  				
					  				<?php
	     		
	     			$registros02=mysqli_query($conexion,"SELECT * FROM genero") or die ("Problemas con el select:".mysqli_error($conexion));

	     			while ($reg2=mysqli_fetch_array($registros02)){
	     				if($reg2['id']==$reg['idGenero']){
	     					echo "<option value=\"$reg2[id]\" selected>$reg2[nombre]</option>";
	     				}
	     				else{
	     					echo "<option value=\"$reg2[id]\">$reg2[nombre]</option>";
	     				}
	     			}

	     		?>
					  			</select>
					  			
							</div>

							<div class="mb-1">
					  			<label for="fecha" class="form-label">Fecha de estreno:</label>
					  			<input type="date" class="form-control" name="fechaNueva" >"<?php echo $reg['fecha']?>"
							</div>

							<div class="mb-1">
					  			<label for="sinopsis" class="form-label">Sinopsis:</label>
					  			<textarea class="form-control" name="sinopsisNueva" rows="3"> "<?php echo $reg['sinopsis']?>"</textarea>
							</div>

							<div class="mb-1">
					  			<label for="foto" class="form-label">Portada:</label>
					  			<input type="file" class="form-control" name="fotoNueva" value="<?php echo $reg['foto']?>">
							</div>

							<div class="mb-1">
					  			<label for="cine" class="form-label">Cine:</label>
					  			<select name="idCineNuevo" class="form-control" >

					  				<?php

	     			     	    $registros03=mysqli_query($conexion,"SELECT * FROM cines") or die("Problemas con el select:".mysqli_error($conexion));
							
								while ($reg3=mysqli_fetch_array($registros03)){

									if($reg3['id']==$reg['idCine']){
										echo "<option value=\"$reg3[id]\" selected>$reg3[nombre]</option>";
									}
									else{
										echo "<option value=\"$reg3[id]\">$reg3[nombre]</option>";
									}
								}
							?>
					  				
					  			</select>
					  			
							</div>

							<div class="mb-1">
					  			<label for="director" class="form-label">Director:</label>
					  			<input type="text" class="form-control" name="directorNuevo" value="<?php echo $reg['director']?>" >
							</div>

							<div class="mb-1">
					  			<label for="precio" class="form-label">Precio:</label>
					  			<input type="text" class="form-control" name="precioNuevo" value="<?php echo $reg['precio']?>" placeholder="0.00">
							</div>
							<hr>



							<div class="d-grid gap-2">
								<input type="hidden" name="idPeliculas" value="<?php echo $reg['id']?>">
								<button type="submit" class="btn btn-primary">Registrar</button>
								<a href="Listar.php" class="btn btn-secondary">Cancelar</a>
							</div>

						</form>
					</div>
					 <?php
	    				 }
	     					else{
	     							echo "No existe la pelicula";
	     				}
	     			?>

		</div>	
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    				

</body>
</html>