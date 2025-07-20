<!DOCTYPE html>
<html>
<head>
	<title>Cadastro</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<?php require_once('header.php'); ?>

	<div class="container">
		<form method="post" action="registra_aluno.php" id="formRegistra">
			<h3>Cadastrar Aluno</h3>
			<div class="form-item">
				<span>Nome</span>
				<div class="input">
					<input type="text" name="nome" id="nome" required="true">
				</div>
			</div>
			<div class="form-item">
				<span>RA</span>
				<div class="input">
					<input type="text" name="ra" id="ra" required="true">
				</div>
			</div>
			<div class="form-item">
				<span>Sexo</span>
				<div class="input">
					<input type="text" name="sexo" id="sexo" required="true">
				</div>
			</div>
			<div class="form-item">
				<span>Idade</span>
				<div class="input">
					<input type="text" name="idade" id="idade" required="true">
				</div>
			</div>
			<div class="form-item">
				<span>Endereço</span>
				<div class="input">
					<input type="text" name="endereco" id="endereco" required="true">
				</div>
			</div>
			<div class="form-item">
				<span>Telefone</span>
				<div class="input">
					<input type="text" name="telefone" id="telefone" required="true">
				</div>
			</div>
			<div class="form-item">
				<span>Email</span>
				<div class="input">
					<input type="email" name="email" id="email" required="true">
				</div>
			</div>
			<div class="form-item">
				<button type="submit">Cadastrar Aluno</button>
			</div>
		</form>
	</div>
</body>
</html>