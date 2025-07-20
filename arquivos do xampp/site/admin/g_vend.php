<?php 
	include('head.php');
	include('header.php');
?>
<?php
 	require_once('../db.class.php');

    $objDb = new db();
    $link = $objDb->conecta_mysql();
    
    $sql = "SELECT * FROM vendas";

    $resultado_id = mysqli_query($link, $sql);
   ?>


<div class="container" style="padding-bottom: 20px;">
	<h2>Gerenciamento de Pedidos</h2>
<table>
	<tr>
		<th>idvenda</th>
		<th>idcliente</th>
		<th>Valor</th>
		<th>Informações</th>
	</tr>
	<?php

	if($resultado_id){

        while($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){

        echo "<tr><td>".$registro['idVendas']."</td><td>".$registro['idcliente']."</td><td>".$registro['valor_venda']."</td><td><a href='info_venda.php?info=".$registro['idVendas']."'>Informações</a></td></tr>";






        }}

	?>

</table>

</div>
<?php 
	include('footer.php');
?>