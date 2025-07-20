<!DOCTYPE html>
<html>
<head>
	<?php include('head.php') ?>
</head>
<body>
	<?php

        session_start();

        if (isset($_SESSION['idcliente'])) {
        
            include('header_logged.php');

        }
        else{

            include('header.php');

        }

     ?>

	<div class="container">
		<h2>O seu Email foi Enviado com Sucesso</h2>
		<h4><a href="contato.php">Voltar Para a Página de Contatos</a></h4>
	</div>

	<?php include('pages/footer-fixed.php') ?>
</body>
</html>