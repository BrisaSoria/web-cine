<?php

class cliente{


					
					session_start();
					

					

					$conexion=mysqli_connect("localhost","root","soriabv24","cinema");

					
            public function registrar()


					$insertar = "INSERT INTO clientes (nombre, apellido, email, telefono, comentario) VALUES (:nombre, :apellido, :email, :telefono, :comentario)";

					           $resultado = mysqli_query($conexion, $insertar)

					         $_array = array( 

										":nombre"= $_POST['nombre'];
										":apellido"= $_POST['apellido'];
										":email"= $_POST['email'];
										":telefono"= $_POST['telefono'];
										":comentario"= $_POST['comentario'];

					         );

					         if ($resultado->execute($_array)) 
					         	return $conexion->last_insert_id();
					         }

					          }

         
}