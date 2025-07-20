<?php 
	include('head.php');
	include('header.php');
?>
<?php
 	require_once('../db.class.php');

    $objDb = new db();
    $link = $objDb->conecta_mysql();
    
    $idvenda = $_GET['info'];

    $sql = "SELECT * FROM vendas WHERE idvendas = '$idvenda'";

    $resultado_id = mysqli_query($link, $sql);
   ?>


<div class="container" style="padding-bottom: 20px;">
	<h2>Gerenciamento de Pedidos</h2>
<table>
	<?php

	if($resultado_id){

        while($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){

        echo "<tr><td>idvenda</td><td>".$registro['idVendas']."</td></tr><tr><td>idcliente</td><td>".$registro['idcliente']."</td></tr><tr><td>Valor</td><td>".$registro['valor_venda']."</td></tr><tr><td>Email</td><td>".$registro['email']."</td></tr><tr><td>Nome</td><td>".$registro['nome']."</td></tr><tr><td>Sobrenome</td><td>".$registro['sobrenome']."</td></tr><tr><td>CPF</td><td>".$registro['cpf']."</td></tr><tr><td>Telefone</td><td>".$registro['telefone']."</td></tr><tr><td>CEP</td><td>".$registro['cep']."</td></tr><tr><td>Endereço</td><td>".$registro['endereco']."</td></tr><tr><td>Número</td><td>".$registro['numero']."</td></tr><tr><td>complemento</td><td>".$registro['complemento']."</td></tr><tr><td>Estado</td><td>".$registro['estado']."</td></tr><tr><td>Cidade</td><td>".$registro['cidade']."</td></tr><tr><td>Bairro</td><td>".$registro['bairro']."</td></tr>";






        }}

	?>

</table>

<button style="margin-top: 30px;"><a href="g_vend.php">Voltar para o Gerenciamento de Vendas</a></button>

</div>
<?php 
	include('footer.php');
?>