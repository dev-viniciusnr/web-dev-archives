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
		<div class="row">
			<div class="col-md-2">
				
			</div>
			<div class="col-md-8 pag_msa">
				<div class="pag_msa_logo">
				 	<img class="pag_msa_logo_logo" src="img/msa_logo.png">
				 	<a href="#"><img class="pag_msa_logo_info" src="img/info.png"></a>
				</div>
				<div class="pag_msa_ola">
					<?php  $nome = $_SESSION['usuario']; ?>
				 	<p>Olá, <?php echo $nome ?>.</p>
				</div>
				<form method="post" action="montado.php" enctype="multipart/form-data" id="formlogin">
					 <div class="pag_msa_produto">
					 	<p>Escolha seu produto:</p>
					 	<p><input class="w3-radio" type="radio" value="1" name="produto">
					 		<label>Camiseta</label></p>
					 	<p><input class="w3-radio" type="radio" value="2" name="produto">
					 		<label>Caneca</label></p>
					 	<p><input class="w3-radio" type="radio" value="3" name="produto">
					 		<label>Quadro</label></p>
					 	<p><input class="w3-radio" type="radio" value="4" name="produto">
					 		<label>Poster</label></p>
					 </div>
					 <div class="pag_msa_tamanho">
					 	<p>Escolha o tamanho:</p>
						<input class="w3-radio" type="radio" value="pp" name="tamanho">
					 	<label>PP	&nbsp;</label>
					 	<input class="w3-radio" type="radio" value="p" name="tamanho">
					 	<label>P	&nbsp;</label>
					 	<input class="w3-radio" type="radio" value="m" name="tamanho">
					 	<label>M	&nbsp;</label>
					 	<input class="w3-radio" type="radio" value="g" name="tamanho">
					 	<label>G	&nbsp;</label>
					 	<input class="w3-radio" type="radio" value="gg" name="tamanho">
					 	<label>GG</label>
					 </div>
					 <div class="pag_msa_tipo">
					 	<p>Escolha o tipo de arquivo de arte:</p>
					 	<p><input class="w3-radio" type="radio" value="pronta" name="tipoarte">
					 		<label>Pronta</label></p>
					 	<p><input class="w3-radio" type="radio" value="Exemplo" name="tipoarte">
					 		<label>Exemplo</label></p>
					 </div>
					 <div class="pag_msa_btn">
					 	<input type="file" name="foto" id="file" class="inputfile" />
						<label for="file">Escolha a Arte</label><br><br>
					 	<input type="submit" class="w3-button w3-block msa_btn" style="width:50%; margin-left: 25%;" value="ENVIAR ARTE">
					 </div>
				</form>
			</div>
			<div class="col-md-2">
				
			</div>
		</div>
	</div>

	<?php include('footer.php') ?>
</body>
</html>