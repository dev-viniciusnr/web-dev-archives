<?php

	session_start();

	unset($_SESSION['idcliente']);
	unset($_SESSION['email']);


	header('Location: index.php');
?>