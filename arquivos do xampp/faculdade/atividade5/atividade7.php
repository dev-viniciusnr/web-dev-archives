<!DOCTYPE html>
<html>
<head>
	<title>Atividade 5</title>
<style type="text/css">
	.exercicio1 .xadrez .quadrado-branco{
		width: 30px;
		height: 30px;
		background-color: #FFF;
	}
	.exercicio1 .xadrez .quadrado-preto{
		width: 30px;
		height: 30px;
		background-color: #000;
	}
	.exercicio1 .xadrez{
		border: 1px solid #000;
	}
</style>
</head>
<body>
	<div class="container">
		<div class="exercicio1">
			<h2>Exercicio A</h2>
			<table class="xadrez">
				<?php 
				$linha = 1;
				for ($i=1; $i <= 81; $i++) { 
					if($linha == 1){
				?>
					<tr>			
				<?php
					}
					$resto = $i % 2;
					if($resto != 0){
				?>
					<td class="quadrado-branco"></td>
				<?php	
					}else{
				?>
					<td class="quadrado-preto"></td>
				<?php
					}
					if($linha == 9){
				?>
					</tr>
				<?php
						$linha = 1;
					}else{
						$linha++ ;
					}
				}

				 ?>
			</table>
		</div>
		<div class="exercicio2">
			<h2>Exercicio B</h2>
			<?php  
				$Cor = array('A' => 'Azul', 'B' => 'Verde', 'c' => 'Vermelho');
				$Cor = array_flip($Cor);
				$Cor = array_change_key_case($Cor, CASE_UPPER);
				$Cor = array_flip($Cor);
				print_r($Cor);   
			?>
		</div>
		<div class="exercicio3">
			<h2>Exercicio C</h2>
		</div>
		<?php
			$contagem = array("abcd","abc","de","hjjj","g","wer");
			$contagem_tamanho = count($contagem);
			$z = 0;
			$menor = 0;
			$maior = 0;
			for ($z == 0; $z < $contagem_tamanho; $z++){
			    $temp = strlen($contagem[$z]);
			    if($z == 0){
			        $menor = $temp;
			        $maior = $temp;
			    }
			    
			    if($maior < $temp){
			        $maior = $temp;
			    }
			    
			    if($menor > $temp){
			        $menor = $temp;
			    }
			}
			echo 'Menor Número é '.$menor;
			?>
			</br>
			<?php
			echo 'Maior Número é '.$maior;

		?>
	</div>
</body>
</html>