<!DOCTYPE html>
<html>
<head>
	<?php include("head.php") ?>
</head>
<body>
<?php

require_once('db.class.php');

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
	<div class="row">
		<div class="col-md-4">
			<form action="finaliza_venda.php" method="POST" style="padding-bottom: 20px;">
				<h2>Dados Pessoais</h2>
				<?php $email ?>
				<div class="dados_pessoais">
					<p>Email</p>
					<input type="email" name="email" placeholder="digite seu email" value="<?php $email ?>" required>
							<p>Nome</p>
							<input type="text" name="nome" placeholder="digite seu nome" required>
							<p>Sobrenome</p>
							<input type="text" name="sobrenome" placeholder="digite seu sobrenome" required>
					<p>CPF</p>
					<input type="text" name="cpf" placeholder="digite seu CPF" required>
					<p>Telefone</p>
					<input type="text" name="telefone" placeholder="digite seu telefone" required>
				</div>
				<h2>Endereço</h2>
				<div class="endereco">
					<p>CEP</p>
					<input type="text" name="cep" placeholder="digite seu CEP">
					<p>Endereço</p>
					<input type="text" name="endereco_input" placeholder="digite seu endereço" required>
							<p>Número</p>
							<input type="text" name="numero" placeholder="digite seu numero" required>
							<p>Complemento</p>
							<input type="text" name="complemento" placeholder="digite seu complemento">
							<p>Estado</p>
							<input type="text" name="estado" placeholder="digite seu estado" required>
							<p>Cidade</p>
							<input type="text" name="cidade" placeholder="digite a cidade" required>
					<p>Bairro</p>
					<input type="text" name="bairro" placeholder="digite seu bairro" required>
				</div>
			</div>
			<div class="col-md-4">
				<h2>Método de Pagamento</h2>
				<input type="radio" id="pagamento" name="pagamento" value="huey"
				         checked>
				  <label for="huey">Pagar com Boleto</label>
				  <h2>Método de Entrega</h2>
				<input type="radio" id="entrega" name="entrega" value="huey"
				         checked>
				  <label for="huey">Envio pelo Correios, Valor fixo 10,00</label>
			</div>
			<div class="col-md-4">
			<?php

		    $objDb = new db();
		    $link = $objDb->conecta_mysql();

		    $idcliente = $_SESSION['idcliente'];
		    
		    $sql = "SELECT * FROM cart WHERE iduser = '$idcliente'";

		    $resultado_cart = mysqli_query($link, $sql);

		    ?>

		    <table class="table_cart_finalizar">
				<tr>
				    <td>Produto</td>
				    <td>Preço</td>
				    <td>Quantidade</td>
				    <td>Subtotal</td>
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

				            echo "<td>".$nomeprod."-".$tamanho."</td>";
				            echo "<td>".$precoprod."</td>";
				            echo "<td>".$quant."</td>";

				            $total[$num] = $precoprod*$quant;

				            echo "<td>".($total[$num])."</td>";

				            echo "</tr>";
				        }
				    }else{
				    
				        echo 'Erro na consulta no banco de dados!';

				    }

				    $final_preco = array_sum($total);
				    $preco_final = $final_preco + 10;

				?>
				<tr><td colspan="2">Entrega com taxa fixa</td><td colspan="2">10.00</td></tr>
				<?php
				echo "<tr><td colspan='2'>Total</td><td colspan='2'><input type='text' name='valor' readonly='true' style='border:0;' value='".$preco_final."''></td></tr>";
				?>
				</table>
				<button type="submit">FINALIZAR</a></button>
				</div>

	</form>
	</div>
</div>
<?php include("footer.php") ?>
</body>
</html>