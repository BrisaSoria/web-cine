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
	<?php

			$conexion=mysqli_connect("localhost","root", "soriabv24", "cinema");

			

			if(!empty($_FILES['foto']['name']))
				$_REQUEST['foto'] = subirFoto();
			



			mysqli_query($conexion,"UPDATE peliculas SET titulo='$_REQUEST[tituloNuevo]', idGenero='$_REQUEST[idGeneroNuevo]', sinopsis='$_REQUEST[sinopsisNueva]', foto='$_REQUEST[fotoNueva]', idCine='$_REQUEST[idCineNuevo]', director='$_REQUEST[directorNuevo]', precio='$_REQUEST[precioNuevo]', 
			fecha='$_REQUEST[fechaNueva]' where id='$_REQUEST[idPeliculas]';")or die("Problemas con el update:".mysqli_error($conexion));

			echo "La pelicula fue modificada con exito";

			
		?>

	 <br>
	 
     	<br>

	<div class="alert alert-dark" role="alert">
		
		<a href="admin.php">Volver Al Menu Principal</a>
		<br>
		<a href="listar01.php">Volver</a>
   
   </div>

</body>
</html>