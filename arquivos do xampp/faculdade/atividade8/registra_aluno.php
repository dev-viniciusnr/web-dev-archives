<?php

	require_once('conexao.php');

	$nome = $_POST['nome'];
	$ra = $_POST['ra'];
	$sexo = $_POST['sexo'];
	$idade = $_POST['idade'];
	$endereco = $_POST['endereco'];
	$telefone = $_POST['telefone'];
	$email = $_POST['email'];

	$objDb = new db();
	$link = $objDb->conecta_bd();

	$inserir_aluno = "INSERT INTO alunos(ra, nome, sexo, idade, endereco, telefone, email) VALUES('$ra', '$nome', '$sexo', '$idade', '$endereco', '$telefone', '$email')";

	if(mysqli_query($link, $inserir_aluno)){
		header('Location: cadastrado.php');
	}else{
		echo "Erro ao registrar";
	}


	
?>