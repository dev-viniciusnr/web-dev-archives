<!DOCTYPE html>
<html>
<head>
	<?php include("head.php") ?>
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

        $email = $_SESSION['email'];

     ?>
<div class="container">
	<form action="boleto/boleto_itau.php" method="POST" style="padding-bottom: 20px;">
		<h2>Dados Pessoais</h2>
		<?php $email ?>
		<div class="dados_pessoais">
			<p>Email</p>
			<input type="text" name="email" placeholder="digite seu email" value="<?php $email ?>">
			<div class="row">
				<div class="col-md-3">
					<p>Nome</p>
					<input type="text" name="nome" placeholder="digite seu nome">
				</div>
				<div class="col-md-2">
					<p>Sobrenome</p>
					<input type="text" name="sobrenome" placeholder="digite seu sobrenome">
				</div>
			</div>
			<p>CPF</p>
			<input type="text" name="cpf" placeholder="digite seu CPF">
			<p>Telefone</p>
			<input type="text" name="telefone" placeholder="digite seu telefone">
		</div>
		<h2>Endereço</h2>
		<div class="endereco">
			<p>CEP</p>
			<input type="text" name="cep" placeholder="digite seu CEP">
			<p>Endereço</p>
			<input type="text" name="endereco_input" placeholder="digite seu endereço">
			<div class="row">
				<div class="col-md-3">
					<p>Número</p>
					<input type="text" name="numero" placeholder="digite seu numero">
				</div>
				<div class="col-md-2">
					<p>Complemento</p>
					<input type="text" name="complemento" placeholder="digite seu complemento">
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
					<p>Estado</p>
					<input type="text" name="estado" placeholder="digite seu estado">
				</div>
				<div class="col-md-2">
					<p>Cidade</p>
					<input type="text" name="sobrenome" placeholder="digite a cidade">
				</div>
			</div>
			<p>Bairro</p>
			<input type="text" name="bairro" placeholder="digite seu bairro">
		</div>

		<div class="valor" style="float: right;">
		<?php 
			$valor = $_GET['valor'];

			echo "<input type='text' name='valor' value='$valor'><br>";
		?>

		</div>

		<input type="submit" value="Pagar com Boleto">
		<input type="submit" value="Pagar com Cartão (WIP)" disabled="disabled">
	</form>
</div>
<?php include("footer.php") ?>
</body>
</html>