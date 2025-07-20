<?php
    require_once('../db.class.php');

    $idfuncionario = $_POST['idfuncionario'];

    $objDb = new db();
    $link = $objDb->conecta_mysql();

    $sql = "DELETE FROM admin WHERE id = '$idfuncionario';";

    //executar a query
    if(mysqli_query($link, $sql)){
        header("Location:g_admin.php?cadastrado=2");
    }else{
        echo "Erro ao excluir o funcionário!";
    }

?>