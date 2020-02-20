
<?php
	
	// cria conexao com banco
	$conexao= mysqli_connect('localhost','root','','db');

	// ajuste de teclado
	mysqli_set_charset($conexao,'utf8');

	// ver se conexão está ok
	if($conexao->connect_error){
		die("Falha ao realizar conexao com banco de dados:".$conexao->connect_error);
		}

?>