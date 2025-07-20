<?php

    include('functions.php');
    require_once('db.class.php');

    session_start();

    $idcliente = $_SESSION['idcliente'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $sobrenome = $_POST['sobrenome'];
    $cpf = $_POST['cpf'];
    $telefone = $_POST['telefone'];
    $cep = $_POST['cep'];
    $endereco = $_POST['endereco_input'];
    $numero = $_POST['numero'];
    $complemento = $_POST['complemento'];
    $estado = $_POST['estado'];
    $cidade = $_POST['cidade'];
    $bairro = $_POST['bairro'];
    $valor = $_POST['valor'];
    $data = date("d/m/Y");

    $objDb = new db();
    $link = $objDb->conecta_mysql();

    $sql = "INSERT INTO vendas (idcliente, valor_venda, email, nome, sobrenome, cpf, telefone, cep, endereco, numero, complemento, estado, cidade, bairro, data) VALUES ('$idcliente', '$valor', '$email', '$nome', '$sobrenome', '$cpf', '$telefone', '$cep', 'endereco', '$numero', '$complemento', '$estado', '$cidade', '$bairro', '$data')";

    $sql2= "DELETE FROM cart WHERE iduser = '$idcliente'";


    //executar a query
    if(mysqli_query($link, $sql)){
        if(mysqli_query($link, $sql2)){
            header("Location:pedido.php");
    }
    }else{
        echo "Erro ao realizar o pedido!";
    }




?>