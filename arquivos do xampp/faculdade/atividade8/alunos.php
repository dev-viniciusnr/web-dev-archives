<!DOCTYPE html>
<html>
<head>
	<title>Alunos</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<?php require_once('header.php'); ?>

	<div class="container">
		<table class="Alunos" border="1px solid #000">
			<tr>
				<td>RA</td>
				<td>Nome</td>
				<td>Sexo</td>
				<td>Idade</td>
				<td>Endereco</td>
				<td>Telefone</td>
				<td>Email</td>
			</tr>
			<?php require_once('mostra_aluno.php'); ?>
		</table>
	</div>

</body>
</html>