<?php

		
		include ('conexao.php');
		
		
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
		<?php 
		$precoFruta = $_POST['preco'];
		$Nome = $_POST['frutaNome'];
		$quant = $_POST['quant'];
		

		$sql = "INSERT INTO tbfrutas(preco, frutaNome, quant) VALUES ('$precoFruta','$Nome','$quant')";

		if (mysqli_query ($conexao, $sql)){
			echo "<br><br> Fruta cadastrada com sucesso!";
		}else{
			echo "Erro ->".mysqli_error($conexao);
		}

		?>
		<br>
		<br>
		<a href="bancoDeFrutas.html"> <<< Voltar ao inicio </a>
	</dir>
	
</body>
</html>