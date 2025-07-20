<?php

	require_once('header.php');

?>
<div class="container">
	<form method="get" action="form.php">
		<div class="form-group">
			<h4>Nome</h4>
			<input type="text" name="nome" class="form-control" placeholder="Insira seu Nome Aqui">
		</div>
		<div class="form-group">
			<h4>Email</h4>
			<input type="email" name="email" class="form-control" placeholder="Insira seu Email Aqui">
		</div>
		<div class="form-group">
			<h4>Assunto</h4>
			<input type="text" name="assunto" class="form-control" placeholder="Assunto">
		</div>
		<div class="form-group">
			<h4>Mensagem</h4>
			<textarea name="mensagem" class="form-control" rows="4"></textarea>
		</div>
		<button class="btn btn-primary" type="submit">Enviar</button>
	</form>
</div>


<?php

	require_once('footer.php');

?>