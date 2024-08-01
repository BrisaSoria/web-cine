<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="style01.css">
</head>
<body >

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	  <div class="container-fluid">
	    <a class="navbar-brand" href="#">CINEHOME</a>
	    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	   
	  </div>
	</nav>
	<form action="validar.php" method="post">
		
		<div class="login">
			<h1>Ingreso de usuario</h1>
			<h2><p>Usuario <input type="text" name="usuario"></p></h2>
			<h2><p>Clave <input type="password" name="clave"></p></h2>
			<br>
			<input type="submit" class="btn btn-dark" value="Ingresar">
			<div class="signup_link">
				No tienes cuenta? <a href="">Registrarse</a>
	
		</div>

	</form>

	

</body>
</html>