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
	        <a class="nav-link" href="Listar.php">Peliculas</a>
	        <a class="nav-link" href="#">Buscar</a>
	        <a class="nav-link" href="#">Pedidos</a>
	        <a class="nav-link" href="login.php">Cerrar Session</a>
	         </div>
	    </div>
	  </div>
	</nav>

	 <?php

     		$conexion=mysqli_connect("localhost","root","soriabv24","cinema");

     		$titulo = $_POST['titulo'];
            $genero = $_POST['idGenero'];
            $fecha = date('Y-m-d');
            $sinopsis = $_POST['sinopsis'];
            $foto = subirFoto();
            $cine = $_POST['idCine'];
            $director = $_POST['director'];
            $precio = $_POST['precio'];

         $insertar = "INSERT into peliculas (titulo, idGenero, fecha, sinopsis, foto, idCine, director, precio) values ('$titulo', '$genero', '$fecha', '$sinopsis','$foto', '$cine', '$director', '$precio')";

         $resultado = mysqli_query($conexion, $insertar) or die ("Error al insertar los registros");


         function subirFoto() {

          $carpeta =$_SERVER['DOCUMENT_ROOT'].'/final/upload/';

          $archivo = $carpeta.$_FILES['foto']['name'];

          move_uploaded_file($_FILES['foto']['tmp_name'], $archivo);

          return $_FILES['foto']['name'];
         }
     		
         mysqli_close($conexion);
     		

     		echo "La pelicula fue dada de alta.";
     	?>
     	<br>

	<div class="alert alert-dark" role="alert">
		
		
		<a href="index.php">Volver</a>
   
   </div>

</body>
</html>