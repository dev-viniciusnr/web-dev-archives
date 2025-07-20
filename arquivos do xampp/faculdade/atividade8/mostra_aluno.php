<?php

	require_once('conexao.php');

	$objDb = new db();
	$link = $objDb->conecta_bd();

	$mostrar_aluno = "SELECT * FROM alunos ORDER BY ra ASC";

	$alunos = mysqli_query($link, $mostrar_aluno);
	
	if ($alunos->num_rows > 0) {
    		while($row = $alunos->fetch_assoc()) {
        		echo "<tr><td>". $row["ra"]. "</td><td>". $row["nome"]. "</td><td>" . $row["sexo"] . "</td><td>" . $row["idade"] . "</td><td>" . $row["endereco"] . "</td><td>" . $row["telefone"] . "</td><td>" . $row["email"] . "</td></tr>";
    		}
	} else {
		    echo "Nenhum Resultado";
	}

?>