<html>
<head>
	<?php include('head.php') ?>
</head>
<body class="information">
	
	<?php

        session_start();

        if (isset($_SESSION['idcliente'])) {
        
            include('header_logged.php');

        }
        else{

            include('header.php');

        }

     ?>
	<div class="border-pag-info container-fluid">		
	</div>
	<div class="container pag-info">
		<div class="pagina_informativa">
			<h2>Seu Carrinho esta vazio</h2>
			<a href="lista-de-camisetas.php"><button>Navegar pela loja</button></a>
		</div>
	</div>

	<?php include('pages/footer-fixed.php') ?>

</body>
</html>