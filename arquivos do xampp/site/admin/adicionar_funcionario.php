<?php
    require_once('../db.class.php');

    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    $objDb = new db();
    $link = $objDb->conecta_mysql();

    $sql = "INSERT INTO admin (usuario, senha) VALUES ('$usuario', '$senha')";

    //executar a query
    if(mysqli_query($link, $sql)){
        header("Location:g_admin.php?cadastrado=1");
    }else{
        echo "Erro ao registrar o funcionário!";
    }

?>