<?php
	//tratamento de erros PHP
	error_reporting(0);
	ini_set(“display_errors”, 0 );
	
	// Conexão ao banco

include("conexao.php");


	//pegando nome do cliente e vinculando ID
	$sql = "SELECT * FROM dados " ;		
	$result = $conexao->query($sql);	
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
				$id_dados=$row1['id_dados'];
				$nome_cliente=$row1['nome_cliente'];
				$id_impressora=$row1['id_impressora'];
				$modelo=$row1['modelo'];
				$serie=$row1['serie'];
				$data_coleta=$row1['data_coleta'];
				
				
			}
		}
		
		
?>