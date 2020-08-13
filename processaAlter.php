<?php
include ('conexao.php');
?>	
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
	<meta charset="utf-8">
	<title> Cadastro de Frutas </title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<!----------------------------------------------------->
<body>
	<header class="cabeca">
		<a href="bancoDeFrutas.html"><h1>Banco de Frutas</h1></a>	
	</header>
	
	<div class="lista">
		<?php
//chama o arquivo de conexão com o bd
		include('conexao.php');

// declaração de variáveis
		$id = $_POST['id'];
		$quant = $_POST['quant'];
		$preco =$_POST['precoFruta'];

// UPDATE nomeDaTabela SET coluna=variavel Where(quando) condição
		$sql = "UPDATE tbfrutas SET quant='$quant', preco='$preco' where id = '$id'";
		$res=mysqli_query($conexao,$sql);
// testa a operaçao
		if ($res) {
			echo "sucesso";
		} else {
			echo "erro";
		}
		?>

		</div>
		<dir class="main" id="voltar">
		<br>
		<br>
		<a href="bancoDeFrutas.html"> <<< Voltar ao inicio </a>
		</dir>

		</body>
		</html>