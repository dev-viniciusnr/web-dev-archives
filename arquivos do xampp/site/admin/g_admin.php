<?php 
	include('head.php');
	include('header.php');

	if(!isset($_GET['cadastrado'])){
		$cad = 0;
	}else{
		$cad = $_GET['cadastrado'];
	}
?>

<div class="container" style="padding-bottom: 40px;">
	<h2>Gerenciamento de Funcionários</h2>
	<?php

	if ($cad == 1) {
		echo "<p style='color: green;'>O funcionário foi cadastrado com sucesso</p>";
	}

	?>
	<h3>Adicionar Funcionário</h3>
	<form method="post" action="adicionar_funcionario.php">
		<p>Usuário</p>
		<input type="text" name="usuario">
		<p>Senha</p>
		<input type="password" name="senha"><br><br>
		<button type="submit">Adicionar</button>
	</form>
	<h3>Excluir Funcionário</h3>
	<?php

	if ($cad == 2) {
		echo "<p style='color: green;'>O funcionário foi removido com sucesso</p>";
	}

	?>
	<form method="POST" action="excluir_funcionario.php">
		<input type="text" name="idfuncionario" placeholder="Digite o id do funcionario">
		<br><br>
		<button type="submit">Remover</button>
	</form>
<h3>Funcionários</h3>
<table>
	<tr>
		<th>idfuncionário</th>
		<th>Nome</th>
	</tr>
	<?php
 	require_once('../db.class.php');

    $objDb = new db();
    $link = $objDb->conecta_mysql();
    
    $sql = "SELECT * FROM admin";

    $resultado_id = mysqli_query($link, $sql);

   if($resultado_id){

        while($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){

        	echo "<tr><td>".$registro['id']."</td><td>".$registro['usuario']."</td></tr>";

        }}
?>
</table>
</div>

<?php 
	include('footer.php');
?>