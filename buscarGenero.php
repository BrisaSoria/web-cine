<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<link rel="stylesheet" href="style02.css">

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
	        <a class="nav-link active" aria-current="page" href="home.php">Inicio</a>
	       <a  class="nav-link active" href="buscarHome.php">Buscar</a>
	        <a class="nav-link" href="login.php">Cerrar Session</a>
	        

	      </div>
	    </div>
	  </div>
	</nav>


	<div class="container" id="main">
		<div class="row">

			
					

						
							<?php 


	   								 $conexion=mysqli_connect("localhost","root","soriabv24","cinema");

									    $registros=mysqli_query($conexion, "SELECT peliculas.id as Id, peliculas.titulo as Titulo, genero.nombre as Genero, peliculas.fecha as Fecha, peliculas.sinopsis as Sinopsis, peliculas.foto as Foto, cines.nombre as Cine, peliculas.director as Director, peliculas.precio as Precio from peliculas join genero on genero.id=peliculas.idGenero join cines on cines.id=peliculas.idCine where idGenero='$_REQUEST[idGenero]';") or die("Problemas en el select:".mysql_error($conexion));
									     
	   								while ($reg=mysqli_fetch_array($registros)) {
	   										   										
	   								

	   								
	    				    ?>


						<div class="col-md-3">
						<div class="card" style="width: 12rem;">
					 

					  <?php 
								$foto = './upload/'.$reg['Foto'];
								if(file_exists($foto)){
									?>
									<img src="<?php print $foto; ?>" class="card-img-top">

								<?php 
										}else{?>
									SIN FOTO
									<?php }?>

					  <div class="card-body">

					    <p class="card-text">
					    	<?php echo $reg['Titulo'] ?>
					    </p>
					  </div>

					  <div class="card-footer">
					  	<a href="carrito.php?id=<?php echo $reg['Id'] ?>" class="btn btn-dark btn-block"><i class="bi bi-cart4"> Comprar</i></a>
					  </div>
					</div>
			</div>


						<?php 
			    }
			   ?>
			  
		</div>
		
	</div>

	 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	   

</body>
</html>