<?php

	$nome = $_GET['nome'];
	$email = $_GET['email'];
	$assunto = $_GET['assunto'];
	$mensagem = $_GET['mensagem'];


	require_once('header.php');


?>
<div class="container">	
	<h2>Este são os dados do formulário de contato</h2><br><br>
	<h4>Nome</h4>
	<?php echo $nome; ?><br><br>
	<h4>Email</h4>
	<?php echo $email; ?><br><br>
	<h4>Assunto</h4>
	<?php echo $assunto; ?><br><br>
	<h4>Mensagem</h4>
	<?php echo $mensagem; ?><br><br>
	<a href="contato.php"><button class="btn btn-primary">Voltar</button></a>
</div>


<?php  
	require_once('footer.php');
?>