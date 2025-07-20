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
			<h2>Sobre Nós</h2>
			
			<p>
				<img class="img-info" src="img/logo_cima.png">
				<span class="text-img">A empresa Horizon Star nasce com o intuito de suprir uma necessidade do mercado geek, a venda de artigos costumizados e de gosto variado, a partir do comércio de camisetas, canecas e pôsteres.
          Com projetos como o "monte sua arte" e o "agasalho geek", procuramos nos diferenciar das demais lojas, estabelecendo uma gama infinita de possibilidades de estampas e uma campanha de doação de artigos de vestuário.</span></p>

		</div>
	</div>

	<?php include('pages/footer-fixed.php') ?>

</body>
</html>