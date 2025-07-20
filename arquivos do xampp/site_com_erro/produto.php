<!DOCTYPE html>
<html>
<head>
	<?php include('head.php') ?>
</head>
<body>
	<?php include('header.php') ?>

<?php
	 	require_once('db.class.php');

	 $idprod = $_GET['prod'];

	$objDb = new db();
    $link = $objDb->conecta_mysql();
    
    $sql = "SELECT * FROM produtos WHERE idprodutos='$idprod'";

    $resultado_id = mysqli_query($link, $sql);


if($resultado_id){
	while($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)) { 

echo"

	<div class='container'>
		<div class='row produto'>
			<div class='col-md-6 img-produto'>
				<ul id='vertical'>
				  <li data-thumb='/site/admin/img/produtos/".$registro['foto1']."'>
				    <img src='/site/admin/img/produtos/".$registro['foto1']."' />
				  </li>
				  <li data-thumb='/site/admin/img/produtos/".$registro['foto2']."'>
				    <img src='/site/admin/img/produtos/".$registro['foto2']."' />
				  </li>
				  <li data-thumb='/site/admin/img/produtos/".$registro['foto3']."'>
				    <img src='/site/admin/img/produtos/".$registro['foto3']."' />
				  </li>
				  <li data-thumb='/site/admin/img/produtos/".$registro['foto4']."'>
				    <img src='/site/admin/img/produtos/".$registro['foto4']."' />
				  </li>
				</ul>		
       		</div>
       			<!-- Slider -->
				  <script type='text/javascript'>
				  	$(document).ready(function() {
				    $('#vertical').lightSlider({
				      gallery:true,
				      item:1,
				      vertical:true,
				      verticalHeight:400,
				      vThumbWidth:50,
				      thumbItem:4,
				      thumbMargin:4,
				      slideMargin:0
				    });  
				  });
				</script>
				<!-- Slider -->
			<div class='col-md-6 info-produto'>
				<h2>".$registro['nome']."</h2>
				<div class='compra-produto'>
					<div class='preco'>
						<p>R$".$registro['preco']."</sup></p>
					</div>
				</div>
				<form method='post' action='addcar.php?prod=$idprod' id='formprod'>
					<h3 class='title-tamanho'>Tamanho</h3>
					<div class='tamanho-produto'>
							<input type='radio' name='tam' value='pp'> pp<br>
  							<input type='radio' name='tam' value='p'> p<br>
  							<input type='radio' name='tam' value='m'> m<br>
  							<input type='radio' name='tam' value='g'> g<br>
  							<input type='radio' name='tam' value='gg'> gg						
					</div>
					<h3 class='title-tamanho'>Quantidade</h3>
					<div class='prod-info-end'>
						<input class='quant' type='number' name='quant' max='15' min='1' />
					</div>
					<div class='comprar row'>
						<button type='submit' name='btn-comprar' value='Comprar' style='padding-left: 10px;'/>
						<input type='button' name='btn-carrinho' value='Adicionar ao Carrinho'/>
					</div>
				</form>
			</div>
		</div>
		<div class='description row'>
			<div class='box-desc col-12-md'>
				<h2>".$registro['nome']."</h2>
				<p>".$registro['descricao']."</p>
			</div>
		</div>
	</div>

";
}}

?>

	<?php include('footer.php') ?>
</body>
</html>