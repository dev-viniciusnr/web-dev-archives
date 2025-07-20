<?php 
	include('head.php');
	include('header.php');

	if(!isset($_GET['removido'])){
		$rem = 0;
	}else{
		$rem = $_GET['removido'];
	}
?>

<div class="container" style="padding-bottom: 40px;">
	<h2>Gerenciamento de Clientes</h2>
	<h3>Excluir Clientes</h3>
	<?php

	if ($rem == 1) {
		echo "<p style='color: green;'>O funcionário foi removido com sucesso</p>";
	}

	?>
	<form method="POST" action="excluir_cliente.php">
		<input type="text" name="idcliente" placeholder="Digite o id do cliente">
		<br><br>
		<button type="submit">Remover</button>
	</form>
<h3>Funcionários</h3>
<table>
	<tr>
		<th>idcliente</th>
		<th>Nome</th>
		<th>Email</th>
	</tr>
	<?php
 	require_once('../db.class.php');

    $objDb = new db();
    $link = $objDb->conecta_mysql();
    
    $sql = "SELECT * FROM usuarios";

    $resultado_id = mysqli_query($link, $sql);

   if($resultado_id){

        while($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){

        	echo "<tr><td>".$registro['idcliente']."</td><td>".$registro['usuario']."</td><td>".$registro['email']."</td></tr>";

        }}
?>
</table>
</div>

<?php 
	include('footer.php');
?>