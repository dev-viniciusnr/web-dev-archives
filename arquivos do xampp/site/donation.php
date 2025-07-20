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
			<h2>Doações</h2>
			
			<p>
				<span class="text-img">Ajude quem precisa! Com nosso projeto "Agasalho geek", você sai com uma camiseta novinha e a sensação boa de ter ajudado alguém, a cada 5 artigos de vestuário vendidos, uma camiseta é doada para empresas parceiras. Compre uma e faça a sua parte.</span></p>
		</div>
	</div>

	<?php include('pages/footer-fixed.php') ?>

</body>
</html>