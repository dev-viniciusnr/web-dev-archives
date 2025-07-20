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

	<div class="container">
		<h2>Seu pedido foi efetuado com sucesso</h2>
		<a target="_blank" href="boleto/boleto_itau.php"><button>Boleto</button></a>
		<a href="index.php"><button>Continuar comprando</button></a>
	</div>

	


	<?php include('pages/footer-fixed.php') ?>

</body>
</html>