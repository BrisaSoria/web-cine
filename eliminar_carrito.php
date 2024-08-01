<?php
		
		session_start();
		if (!isset($_GET['id']) OR !is_numeric($_GET['id'])) 
			header('Location: carrito.php');
			

			$id = $_GET['id'];

			if(isset($_SESSION['carrito'])){
				unset($_SESSION['carrito']);
				header('Location: home.php');

			}else{
				header('Location: home.php');
			}
		
		
