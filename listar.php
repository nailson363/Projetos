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

	<form action="deletar.php" method="POST"> 
		<label> Excluir a Fruta</label>
		<input type=number name='id' placeholder="Digite o id da Fruta" required=""> 
		<button type="submit"> Deletar </button>
	</form>
	<div class="lista">
		<?php 
	//pesquisar as frutas no banco de dados
		$sql = "SELECT * FROM tbfrutas";
		$resultado = mysqli_query($conexao, $sql) or die("Erro na consulta!".mysqli_error($conexao));

		while($registro = mysqli_fetch_array($resultado)){
			$id = $registro ['id'];
			$frutaNome = $registro ['frutaNome'];
			$preco = $registro ['preco'];
			$quant = $registro ['quant'];
			echo "--------------------<br>";
			echo "ID: $id <br>";
			echo "Nome: $frutaNome <br>";
			echo "Quantidade: $quant <br>";
			echo "Preço: R$ $preco <br>";
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
