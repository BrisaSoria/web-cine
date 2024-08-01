<?php

session_start();

if($_SERVER['REQUEST_METHOD'] === '	POST'){
   require 'carrito.php';
    $id = $_POST['id'];
    $cantidad = $_POST['cantidad'];

			if(isset($_SESSION['carrito'])){

					
							if (isset($_SESSION['carrito']) && !empty($_SESSION['carrito'])) {

								 foreach ($_SESSION['carrito'] as $indice => $value){
								 	$total = $value['precio'] * $value['cantidad'];
							
																
								 		if(is_numeric($cantidad)){


					  					if (array_key_exists($reg['id'],$_SESSION['carrito'])) 
  										$cantidad = FALSE;
  										if($cantidad )

										$_SESSION['carrito'][$reg['id']]['cantidad'] = $cantidad; 
	 
										else
										$_SESSION['carrito'][$reg['id']]['cantidad'] +=1;
									}

					   	}

					   	header('Location: carrito.php');
					}
					
					   

					   

	}
}






