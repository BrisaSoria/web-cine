<?php
					
					$conexion=mysqli_connect("localhost","root","soriabv24","cinema");

													$idClientes= $_POST['idClientes'];
													$total= $_POST['total'];
													$fecha= $_POST['fecha'];



								 $insertar = "INSERT INTO pedidos(idClientes, total, fecha) VALUES ('$idClientes','$total','$fecha')";

								           $resultado = mysqli_query($conexion, $insertar)

								         


					

					public function registarDetalle( ){


													$pedido_id= $_POST['pedido_id'];
													$pelicula_id= $_POST['pelicula_id'];
													$precio = $_POST['precio'];
													$cantidad = $_POST['cantidad'];




								 $insertar = "INSERT INTO detalle_pedidos(pedido_id, pelicula_id, precio, cantidad) VALUES ('$pedido_id', '$pelicula_id', '$precio','$cantidad')";

								           $resultado = mysqli_query($conexion, $insertar)

								         $_array = array( 

												
												

								         );

								         if ($resultado->execute($_array)) 
								         	return true;
								         }


					}


				

  

					

}