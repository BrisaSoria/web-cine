<?php

session_start();
require 'funciones.php';

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		
	</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

	<link rel="stylesheet" href="style02.css">
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
	       
	        <a class="nav-link" href="buscarHome.php">Buscar</a>
	       
	        <a class="nav-link" href="login.php">Cerrar Session</a>
	        

	      </div>
	    </div>
	  </div>
	</nav>

	<div class="container" id="main">
		

			<div class="main-form">
				<div class="row">
					<div class="col-md-8" >
								<fieldset>
									<legend>Completar Datos</legend>
									<form action="completar_pedido.php" method="post">
										<div class="mb-1">
						  					<label>Nombre</label>
						  					<input type="text" class="form-control" name="nombre" autofocus>
										</div>

										<div class="mb-1">
						  					<label>Apellido</label>
						  					<input type="text" class="form-control" name="apellido" autofocus>
										</div>

										<div class="mb-1">
						  					<label>Email</label>
						  					<input type="text" class="form-control" name="email" autofocus>
										</div>
										<div class="mb-1">
						  					<label>Telefono</label>
						  					<input type="text" class="form-control" name="telefono" autofocus>
										</div>
										<div class="mb-1">
						  					<label>Comentario</label>
						  					<textarea name="comentario" class="form-control" rows="4"></textarea>
										</div>
											<hr>
											<button type="submit" class="btn btn-dark btn-block">Enviar</button>
											</form>
								</fieldset>
							
							
					</div>
				</div>
			</div>
			  
		
		
	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>