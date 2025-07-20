<!DOCTYPE html>
<html>
<head>
	<?php include('head.php') ?>
	<?php

	require_once('db.class.php');

	session_start();

	if(!isset($_SESSION['idcliente'])){
		header('Location: login.php?erro=2');
	}

?>
</head>

<style type="text/css">
    .table_cart tr td{
        border: 1px solid black;
        padding: 5px;
    }
</style>


<body>
	<?php include('header.php') ?>



<?php

    $objDb = new db();
    $link = $objDb->conecta_mysql();

    $idcliente = $_SESSION['idcliente'];
    
    $sql = "SELECT * FROM cart WHERE iduser = '$idcliente'";

    $resultado_cart = mysqli_query($link, $sql);

    ?>


<div class="container" style="padding-bottom: 500px">
<table class="table_cart">
<tr style="border: 1px solid black;">
	<td>Produto</td>
	<td>Preço</td>
	<td>Quantidade</td>
	<td>Subtotal</td>
    <td>Remover</td>
</tr>
<?php

$num = 0;

    if($resultado_cart){

        while($registro = mysqli_fetch_array($resultado_cart, MYSQLI_ASSOC)){

        	$idprod = $registro['idprodutos'];

             $quant = $registro['quant'];

             $tamanho = $registro['tamanho'];

        	echo "<tr>";

            //Produto
            $sql2 = "SELECT * FROM produtos WHERE idprodutos = '$idprod'";

            $resultado_prod = mysqli_query($link, $sql2);

        	 while($registro2 = mysqli_fetch_array($resultado_prod, MYSQLI_ASSOC)){
			        		$nomeprod = $registro2['nome'];
			        		$precoprod = $registro2['preco'];	
                            $foto = $registro2['thumb1'];   		        	

					   }

            $num++;

            echo "<td><img style='width:100px;height:150px;' src='admin/img/produtos/".$foto."'>".$nomeprod."-".$tamanho."</td>";
            echo "<td>".$precoprod."</td>";
			echo "<td>".$quant."</td>";

            $total[$num] = $precoprod*$quant;

            echo "<td>".($total[$num])."</td>";


            $sql3 = "DELETE FROM cart WHERE iduser = '$idcliente' AND idprodutos = '$idprod'";



            
            echo "<td><button type='submit'><a href='remove.php?idprodutos=".$idprod."'>Remover</a></button></td>";

        



        	echo "</tr>";
        }
    }else{
    
        echo 'Erro na consulta no banco de dados!';

    }

?>
</table>
<div style="float: right;" class="container">
    <h2>Total</h2>
    <?php 
        $final_preco = array_sum($total);
        echo $final_preco;
    ?>
</div>
<?php

      if($total == ""){
            header('Location: semproduto.php');
        }

    echo "<br><button class='btn btn-default'><a href='finalizar.php?valor=calma'> FINALIZAR COMPRA</a></button>";
    ?>

</div>
    
	<?php include('footer.php') ?>
</body>
</html>