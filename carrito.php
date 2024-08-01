
<?php
  
  session_start();
require'funciones.php';


 $conexion=mysqli_connect("localhost","root","soriabv24","cinema") or die("Problemas con la conexión");
 $registros=mysqli_query($conexion, "SELECT * FROM peliculas where id=$_REQUEST[id]") or die("Problemas con el select:".mysql_error($conexion));

  if ($reg=mysqli_fetch_array($registros)){   $registros=mysqli_query($conexion, "SELECT peliculas.id as Id, peliculas.titulo as Titulo, genero.nombre as Genero, peliculas.fecha as Fecha, peliculas.sinopsis as Sinopsis, peliculas.foto as Foto, cines.nombre as Cine, peliculas.director as Director, peliculas.precio as Precio from peliculas join genero on genero.id=peliculas.idGenero join cines on cines.id=peliculas.idCine;") or die("Problemas en el select:".mysqli_error($conexion));
  


 }



  if(isset($_SESSION['carrito'])){

  		if (array_key_exists($reg['id'],$_SESSION['carrito'])) {
  			$cantidad = FALSE;
  			if($cantidad )

				$_SESSION['carrito'][$reg['id']]['cantidad'] = $cantidad; 
	 
			else
				$_SESSION['carrito'][$reg['id']]['cantidad'] +=1;


  		}else{

  			 $_SESSION['carrito'][$reg['id']]  = array(
	'id' => $reg['id'],
	'titulo' => $reg['titulo'],
	'foto' => $reg['foto'],
	'precio' => $reg['precio'],
	'cantidad' => 1
	 );

  		}

  }else{
  	 $_SESSION['carrito'][$reg['id']]  = array(
	'id' => $reg['id'],
	'titulo' => $reg['titulo'],
	'foto' => $reg['foto'],
	'precio' => $reg['precio'],
	'cantidad' => 1
	 );


  }



     

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
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
	      	<ul class="nav navbar-nav pull-right">
	      		<li>
	      			<a href="" class="btn btn-dark">Carrito<span class="badge text-bg-dark"><?php print cantidadPeliculas(); ?></span></a>
	      		</li>
	      	</ul>
	        <a class="nav-link active" aria-current="page" href="home.php">Inicio</a>
	       
	        <a class="nav-link" href="buscarHome.php">Buscar</a>
	        
	        <a class="nav-link" href="login.php">Cerrar Session</a>
	        

	      </div>
	    </div>
	  </div>
	</nav>

	<div class="container my-3" id="main">
			<table class="table table-bordered table-hover" >
					<thead>
						<tr>
							
							<th class="centrado">#</th>
							<th class="centrado">Pelicula</th>
							<th class="centrado">foto</th>
							<th class="centrado">precio</th>
							<th class="centrado">cantidad</th>
							<th class="centrado">total</th>
						</tr>
					</thead>
					<tbody>
						<?php 
							if (isset($_SESSION['carrito']) && !empty($_SESSION['carrito'])) {
								$c=0;
																 foreach ($_SESSION['carrito'] as $indice => $value){
																 	$c++;
								 	$total = $value['precio'] * $value['cantidad'];
								 	
						?>

							 <tr>
							 	<form action="actualizar_carrito.php" method="post">
							 		<td><?php print $c?></td>
							 	
									 	<td><?php print $value['titulo']?></td>
									 		<td>
												<?php 
												$foto = './upload/'.$value['foto'];
												if(file_exists($foto)){
													?>
													<img src="<?php print $foto; ?>" width="35">

												<?php 
														}else{?>
													SIN FOTO
													<?php }?>
									 		</td>
									 	  <td>
									 	  	<?php print $value['precio'] ?>
									 	  </td>
									 	  <td>
									 	  	<input type="hidden" name="id" value="<?php print $value['id'] ?>">
									 	  	<input type="text" name="cantidad" class="form-control u-size-100" value="<?php print $value['cantidad'] ?>">
									 	  </td>

									 	  <td>
									 	  	<?php print $total ?>
									 	  </td>

									 	  <td>
									 	  	

									 	  	<a href="eliminar_carrito.php?id=<?php print 
									 	  	$value['id'] ?>" class="btn btn-danger btn-xs"><i class="bi bi-trash3-fill"></i></a>
									 	  </td>

							 	 </form>
							 	
							 </tr>

						<?php 
						 }

						  }else{


						?>

						<tr>
							<td colspan="7">NO HAY PRODUCTOS EN EL CARRITO</td>
						</tr>
					    <?php 
						 	}
						 ?>

					</tbody>
					<tfoot>
						<tr>
							<td colspan="5" class="text-right">Total</td>
							<td><?php print calcularTotal();?></td>
							<td></td>
						</tr>
					</tfoot>
				</table>

				<hr>
				<?php 
				  if(isset($_SESSION['carrito']) && !empty($_SESSION['carrito'])){ 

				?>

			<div
			class="row">

				<div class="pull-right">
					<a href="finalizar.php" class="btn btn-dark">Finalizar Compra</a>
				</div>

				<hr>

				<div class="pull-right">
					<a href="home.php" class="btn btn-dark">Seguir  Comprando</a>
				</div>

			</div>

			<?php 
				 }

			?>
			
	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>