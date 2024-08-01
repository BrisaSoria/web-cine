<?php

session_start();
require 'funciones.php';



	$conexion=mysqli_connect("localhost","root","soriabv24","cinema");


			$nombre= $_POST['nombre'];
			$apellido= $_POST['apellido'];
			$email= $_POST['email'];
			$telefono= $_POST['telefono'];
			$comentario= $_POST['comentario'];


				$insertar = "INSERT INTO clientes (nombre, apellido, email, telefono, comentario) VALUES ('$nombre','$apellido','$email','$telefono','$comentario')";

					 $resultado = mysqli_query($conexion, $insertar);

					         

					         	
					  mysqli_close($conexion);


					  $conexion=mysqli_connect("localhost","root","soriabv24","cinema");

					  $idClientes = $resultado;
					         	$_array = array(

											"idClientes"=>$idClientes,
											"total"=> calcularTotal(),
											"fecha" => date('Y-m-d')

					         	);



													$idClientes= $_POST['idClientes'];
													$total= $_POST['total'];
													$fecha= $_POST['fecha'];



								 $insertar = "INSERT INTO pedidos(idClientes, total, fecha) VALUES ('$idClientes','$total','$fecha')";

								           $resultado1 = mysqli_query($conexion, $insertar);

								           $pedido_id = $resultado1;

								           foreach ($_SESSION['carrito'] as $indice => $value) {
								           	$_array = array(
								           		"pedido_id" => $pedido_id,
								           		"pelicula_id"=> $value['id'],
								           		"precio"=> $value['precio'],
								           		"cantidad"=>$value['cantidad']


								           	);

								           			$pedido_id= $_POST['pedido_id'];
													$pelicula_id= $_POST['pelicula_id'];
													$precio = $_POST['precio'];
													$cantidad = $_POST['cantidad'];




								 $insertar = "INSERT INTO detalle_pedidos(pedido_id, pelicula_id, precio, cantidad) VALUES ('$pedido_id', '$pelicula_id', '$precio','$cantidad')";

								           $resultado = mysqli_query($conexion, $insertar);

								        
								           }



					       
