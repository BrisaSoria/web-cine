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
		<div class="row">

			<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12  py-4 bg-white">
				<h2>Listado de Peliculas</h2>
				<table class="table">
					<thead>
						<tr>
							
							<th class="centrado">ID</th>
							<th class="centrado">Titulo</th>
							<th class="centrado">Genero</th>
							<th class="centrado">Fecha de estreno</th>
							<th class="centrado">Sinopsis</th>
							<th class="centrado">Foto</th>
							<th class="centrado">Cine</th>
							<th class="centrado">Director</th>
							<th class="centrado">Precio</th>
							<th class="centrado">#</th>
						</tr>
					</thead>
					<tbody>

						
							<?php 


	   								 $conexion=mysqli_connect("localhost","root","soriabv24","cinema");

									    $registros=mysqli_query($conexion, "SELECT peliculas.id as Id, peliculas.titulo as Titulo, genero.nombre as Genero, peliculas.fecha as Fecha, peliculas.sinopsis as Sinopsis, peliculas.foto as Foto, cines.nombre as Cine, peliculas.director as Director, peliculas.precio as Precio from peliculas join genero on genero.id=peliculas.idGenero join cines on cines.id=peliculas.idCine where director='$_REQUEST[director]';") or die ("Problemas en el select:".mysqli_error($conexion));
									     
	   								while ($reg=mysqli_fetch_array($registros)) {
	   										   										
	   								

	   								
	    				    ?>


						
						<tr>
							
							<td class="centrado"><?php echo $reg['Id']?></td>
							<td class="centrado"><?php echo $reg['Titulo'] ?></td>
							<td class="centrado"><?php echo $reg['Genero'] ?></td>
							<td class="centrado"><?php echo $reg['Fecha'] ?></td>
							<td class="centrado"><?php echo $reg['Sinopsis'] ?></td>
							<td class="centrado">
								<?php 
								$foto = './upload/'.$reg['Foto'];
								if(file_exists($foto)){
									?>
									<img src="<?php print $foto; ?>" width="50">

								<?php 
										}else{?>
									SIN FOTO
									<?php }?>
								</td>
							<td class="centrado"><?php echo $reg['Cine'] ?></td>
							<td class="centrado"><?php echo $reg['Director'] ?></td>
							<td class="centrado"><?php echo $reg['Precio'] ?></td>
							<td class="centrado">
								<a href="bajas.php?id=<?php echo $reg['Id'] ?>" class="btn btn-danger btn-sm"><i class="bi bi-trash3-fill"></i></a>
								<a href="modificar.php?id=<?php echo $reg['Id'] ?>" class="btn btn-success btn-sm"><i class="bi bi-pencil-square"></i></a>
							</td>
						</tr>


						<?php
					    	}
							mysqli_close($conexion);
				   		 ?>	
		  	
					</tbody>
				</table>
			</div>	

		</div>	
	</div>

	 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	   

</body>
</html>