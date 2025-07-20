<!DOCTYPE html>
<html>
<head>
	<?php include('head.php'); ?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/functions.js"></script>
</head>
<body>
	<?php

        session_start();

        $idcliente = $_SESSION['idcliente'];

        if (isset($_SESSION['idcliente'])) {
        
            include('header_logged.php');

        }
        else{

            include('header.php');

        }


 $nome = $_SESSION['usuario'];
 $email = $_SESSION['email'];

     ?>


		<div class="container-fluid conta_div">
			
			<div class="col-md-4 conta_menu">
				<ul>
					<li class="conta_menu_title"><a href="#">Menu</a></li>
					<li onclick="verdados()" class="conta_menu_item"><a href="#">Ver Dados</a></li>
					<li onclick="alterar()" class="conta_menu_item"><a href="#">Alterar Dados</a></li>
					<li onclick="endereco()" class="conta_menu_item"><a href="#">Ver Endereços</a></li>
					<li onclick="pedidos()" class="conta_menu_item"><a href="#">Meus Pedidos</a></li>
					<li class="conta_menu_final"></li>
				</ul>
			</div>
			<div class="col-md-8 conta_principal" id="conta_principal">
				<div class="conta_foto">
					<img src="img/user.jpg">
				</div>
				<div class="conta_dados">
					<div class="conta_dado">
						<p><?php echo $nome ?></p>
					</div>
					<div class="conta_dado">
						<p><?php echo $email ?></p>
					</div>
					<div class="conta_dado">
						<p>Não Cadastrado</p>
					</div>
					<div class="conta_dado">
						<p>Não Cadastrado</p>
					</div>
					<div class="conta_imagem_final">
						<img src="img/separador.png">
					</div>
				</div>
			</div>
			<div style="display: none;" class="col-md-8" id="conta_alterar">
				<div class="conta_foto2">
					<script>
						$("#conta_imagem_up").click(function(e) {
    					$("#imageUpload").click();
						});
					</script>
					<image id="conta_imagem_up" src="img/user.jpg">
					<input id="imageUpload" type="file" 
       name="profile_photo" placeholder="Photo" required="" capture>
				</div>
				<div class="conta_dados_2 w3-container">
					<form>
						<div class="conta_dado_2">
							<p>Nome</p>
							<input class="w3-input" type="text" name="nome">
						</div>
						<div class="conta_dado_2">
							<p>E-mail</p>
							<input class="w3-input" type="text" name="email">
						</div>
						<div class="conta_dado_2">
							<p>Telefone</p>
							<input class="w3-input" type="text" name="tel">
						</div>
						<div class="conta_btn">
							<input class="btn btn-default" type="submit" value="ALTERAR">
						</div>
					</form>
				</div>
			</div>
			<div style="display: none;" class="col-md-8" id="conta_endereco">
				<div class="conta_dados_3">
					<div class="conta_dado_3">
						<p>Endereço 1</p>
						<p>Rua Mantiqueira 17 - Vila Linda - Santo André - SP</p>
						<a href="#">Alterar...</a>
					</div>
					<div class="conta_dado_3">
						<p>Endereço 2</p>
						<p>Rua Mantiqueira 17 - Vila Linda - Santo André - SP</p>
						<a href="#">Alterar...</a>
					</div>
					<div class="conta_dado_3">
						<p>Endereço 3</p>
						<p>Não Cadastrado</p>
						<a href="#">Alterar...</a>
					</div>
					<div class="conta_imagem_final">
						<img src="img/separador.png">
					</div>
				</div>
			</div>
			<div style="display: none;" class="col-md-8" id="conta_pedidos">
				<div class="conta_dados_4">

					<?php
					 	require_once('db.class.php');

					    $objDb = new db();
					    $link = $objDb->conecta_mysql();
					    
					    $sql = "SELECT * FROM vendas WHERE idcliente = '$idcliente'";

					    $resultado_id = mysqli_query($link, $sql);

					   if($resultado_id){

					        while($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){

					        	echo "<div class='conta_dado_4'>
										<p>Pedido ".$registro['idVendas']."</p>
										<p>".$registro['data']."</p>
										<p>".$registro['valor_venda']."</p>
									  </div>";

					        }}
					?>

					<div class="conta_imagem_final">
						<img src="img/separador.png">
					</div>
				</div>
			</div>
		</div>
	<?php include('footer.php'); ?>
</body>
</html>