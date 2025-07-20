<?php
    session_start();

    if(!isset($_SESSION['idcliente'])){
        header('Location: login.php?erro=2');
    }

    require_once('db.class.php');

    $idcliente = $_SESSION['idcliente'];
    $idprod = $_GET['prod'];
    $quant = $_POST['quant'];
    $tamanho = $_POST['selector'];


    $objDb = new db();
    $link = $objDb->conecta_mysql();

    $idcliente = $_SESSION['idcliente'];
    
    $sql2 = "SELECT * FROM cart WHERE iduser = '$idcliente' AND idprodutos = '$idprod' AND tamanho = '$tamanho'";

    $resultado_cart = mysqli_query($link, $sql2);

    if($resultado_cart){

        while($registro = mysqli_fetch_array($resultado_cart, MYSQLI_ASSOC)){

            $teste = $registro['idprodutos'];

            if($teste !== ""){
                 header('Location: produto.php');
            }


        }}


    $sql = "INSERT INTO cart (iduser, idprodutos, tamanho, quant) VALUES ('$idcliente', '$idprod', '$tamanho', '$quant')";

    //executar a query
    if(mysqli_query($link, $sql)){
         header("Location:carrinho.php?prod=$idprod");
    }else{
        echo "Erro ao acessar o carrinho";
    }




?>