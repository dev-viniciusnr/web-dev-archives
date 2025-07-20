<?php
	
try{
	$conexao = new \PDO("mysql:host=localhost;dbname=pdo","root","");
}

catch(\PDOException $e){
	die("Erro código: ".$e->getCode().": ".$e->getMessage());
}

$sql = "SELECT * FROM clientes";
$stmt = $conexao->prepare($sql);
$stmt->execute();
$clientes = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach($clientes as $cliente){
	echo $cliente['id']." - ".$cliente['nome']." - ".$cliente['email']."<br>";
}

?>