<?php   
	require_once('db.class.php');
	session_start();

	if(!isset($_SESSION['idcliente'])){
		header('Location: login.php?erro=2');
	}


	$idcliente = $_SESSION['idcliente'];
	$idprod = $_GET['idprodutos'];


	$objDb = new db();
    $link = $objDb->conecta_mysql();

    $sql = "DELETE FROM cart WHERE iduser = '$idcliente' AND idprodutos = '$idprod'";

    $resultado_id = mysqli_query($link, $sql);

    if($resultado_id){
    	header('Location: carrinho.php');
    }

?>