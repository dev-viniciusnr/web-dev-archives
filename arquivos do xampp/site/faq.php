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
		<div class="row faq">
			<h1>Perguntas Frequentes</h1>
			<div class="col-md-12 col-faq">
				<a class="btn-faq" data-toggle="collapse" href="#collapse1" role="button" aria-expanded="false" aria-controls="collapse1">
				  <h2>Como funciona o "Agasalho Geek"?</h2>
				</a>
				<div class="collapse resp" id="collapse1">
				  <h3>A cada 5 artigos de vestuário vendidos, uma camiseta é doada pra uma de nossas empresas parceiras.</h3>
				</div>
				</div>
			<div class="col-md-12 col-faq">
				<a class="btn-faq" data-toggle="collapse" href="#collapse2" role="button" aria-expanded="false" aria-controls="collapse2">
				  <h2>Como envio a minha arte?</h2>
				</a>
				<div class="collapse resp" id="collapse2">
				  <h3>Envie através do sistema "monte a sua arte", apenas escolha um arquivo e envie para impressão, nós adaptaremos da melhor forma e faremos uma camiseta, caneca, pôster ou quadro do jeitinho que quer.</h3>
				</div>
			</div>
			<div class="col-md-12 col-faq">
				<a class="btn-faq" data-toggle="collapse" href="#collapse3" role="button" aria-expanded="false" aria-controls="collapse3">
				  <h2>Como faço uma compra?</h2>
				</a>
				<div class="collapse resp" id="collapse3">
				  <h3>Antes de tudo, verifique se possui uma conta cadastrada no site e logue nela, após isso, clique no anúncio que achar mais interessante, escolha tamanho e adicione ao carrinho, depois é só pagar no boleto ou no cartão de crédito e esperar a entrega.</h3>
				</div>
			</div>
		</div>
	</div>

	<?php include('pages/footer-fixed.php') ?>
</body>
</html>