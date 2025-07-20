<?php

 	require_once('../db.class.php');

    $pesquisa = $_GET['pesquisa'];

    $objDb = new db();
    $link = $objDb->conecta_mysql();
    
    $sql = "SELECT * FROM produtos WHERE nome LIKE '%$pesquisa%'";

    $resultado_id = mysqli_query($link, $sql);

?>

<html>
<head>
	<?php include('head.php') ?>
</head>
<body>

<?php
    include('header.php');
?>

<div class="container">
        <h2>Procurar Produto</h2>
        <form method="get" action="search_produto.php" id="formlogin">
            <div class="form-group ultimo-input">
                <input placeholder="pesquisar" class="w3-input" type="text" name="pesquisa" id="pesquisa">
            </div>

            <button type="submit" class="btn btn-primary form-control" id="btn_login">Alterar Produto</button>
            <br>
            
        </form>
        </div>

<?php
    if($resultado_id){

         echo "<table border='2' style='margin-left: 15px; width: 98%; margin-bottom: 50px;'><tr><th>ID</th><th>Nome</th><th>Preço</th><th>Categoria</th><th>Habilitado</th></tr>";

        while($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){
		   echo "<tr><td>".$registro["idprodutos"]."</td><td>".$registro["nome"]."</td><td>".$registro["preco"]."</td><td>".$registro["Categorias_idCategorias"]."</td><td>".$registro["habilitado"]."</td></tr>";
		
        }
        echo "</table>";
    }else{
    
        echo 'Erro na consulta de produtos no banco de dados!';

    }




?>

			</ul>
			</div>
			</div>
		</div>
	</div>




	<?php include('footer.php') ?>

</body>
</html>