<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>

					<?php
					$usuario=$_POST['usuario'];
					$clave=$_POST['clave'];
					session_start();
					$_SESSION['usuario']=$usuario;

					

					$conexion=mysqli_connect("localhost","root","soriabv24","cinema");

					$consulta="SELECT * FROM usuarios where usuario='$usuario' and clave='$clave'";
					$resultado=mysqli_query($conexion,$consulta);

					$filas=mysqli_fetch_array($resultado); 

					if($filas['idCargo']==1){ //administrador
					  header("location:index.php");

					}else if($filas['idCargo']==2){ //cliente
					  header("location:home.php");
					}

					else{
						?>
						<?php
						include("login.php");
						?>
						<script type="text/javascript">
							alert("Error en los datos");
						</script>
						<?php
					}
					mysqli_free_result($resultado);
					mysqli_close($conexion);

					?>




</body>
</html>


