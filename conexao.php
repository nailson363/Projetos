<?php

	//url de conexão
	$conexao = mysqli_connect('localhost:3309', 'root', '', 'lojafrutas');
	
	
	if($conexao){ // se a conexão ocorrer
	echo "<br><br>";
	}else{ // se não...
		die('Não conectou!');
	}
?>