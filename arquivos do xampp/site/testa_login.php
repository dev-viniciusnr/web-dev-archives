<?php 
session_start();

	if (isset($_SESSION['idcliente'])) {
		
		  header("Location:minha_conta.php");

	}
	else{

		header("Location:login.php");

	}

?>