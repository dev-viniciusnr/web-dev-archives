<?php

 	require_once('db.class.php');

    $pesquisa = $_GET['q'];

    $objDb = new db();
    $link = $objDb->conecta_mysql();
    
    $sql = "SELECT * FROM produtos WHERE nome LIKE '%$pesquisa%'";

    $resultado_id = mysqli_query($link, $sql);

?>

<html>
<head>
	<?php include('head.php') ?>
</head>
<body class="list-prod">
	
	<?php

        session_start();

        if (isset($_SESSION['idcliente'])) {
        
            include('header_logged.php');

        }
        else{

            include('header.php');

        }

     ?>
	
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-3 select-prod">
				<ul>
					<li><h3>Pesquisar</h3></li>
					<li>
              <div id="search-bar">
                <div class="container-4">
                  <form action="search.php" method="GET">
                    <input style="width: 230px !important;" type="search" name="q" id="search" placeholder="O que você deseja?" />
                    <button class="icon"><span class="glyphicon glyphicon-search menu-icon"></span></button>
                  </form>
                </div>
              </div>
            </li>
				</ul>
			</div>
			<div class="col-md-9">
				<h2>Produtos</h2>
				<div class="produtos">
				<ul>

<?php
    if($resultado_id){

        while($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){
        	if($registro['habilitado'] == 'habilitado'){	
		   echo "<li><img src='admin/img/produtos/".$registro['thumb1']."'><br><span class='prod-name'>".$registro['nome']."</span><br><span class='price' name='preco'>".$registro['preco']."</span><br><a href='produto.php?prod=".$registro['idprodutos']."'><button type='submit' class='btn-list btn btn-success'>Comprar</button></a></li>";
		}

        }

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