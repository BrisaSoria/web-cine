<?php


		function calcularTotal(){

			$total = 0;
			if (isset($_SESSION['carrito'])) {
				foreach($_SESSION['carrito'] as $indice => $value){
					$total += $value['precio'] * $value['cantidad'];
				}
			}

			return $total;

		}

		function cantidadPeliculas(){

			$cantidad = 0;
			if(isset($_SESSION['carrito'])){
				foreach($_SESSION['carrito'] as $indice => $value){
					$cantidad++;
				}
			}
			return $cantidad;

		}

?>