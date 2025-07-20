<?php
    require_once('../db.class.php');

    $idcliente = $_POST['idcliente'];

    $objDb = new db();
    $link = $objDb->conecta_mysql();

    $sql = "DELETE FROM usuarios WHERE idcliente = '$idcliente';";

    //executar a query
    if(mysqli_query($link, $sql)){
        header("Location:g_client.php?removido=1");
    }else{
        echo "Erro ao excluir o funcionário!";
    }

?>