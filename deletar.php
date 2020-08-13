<?php 
	$id = $_POST['id'];
	
	include ('conexao.php');
		
		$sql = "DELETE FROM tbfrutas WHERE id = '$id'";
		$resultado = mysqli_query($conexao, $sql) or die("Erro no delete!".mysqli_error($conexao));
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
	<meta charset="utf-8">
	<title> Excluir Fruta </title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<!----------------------------------------------------->
<body>
	<header class="cabeca">
		<a href="bancoDeFrutas.html"><h1>Banco de Frutas</h1></a>	
	</header>


	<dir class="main" id="voltar">
		<h3>Fruta Deletada</h3>
		<br>
		<br>
		<a href="bancoDeFrutas.html"> <<< Voltar ao inicio </a>
	</dir>
	
</body>
</html>