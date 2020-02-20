<?php
	include("conexao.php");

	//variaveis recebendo dados do formulario por post clientes
	
	$cliente         =$_POST['cliente'];
	$comunidade      =$_POST['comunidade'];
	$ip              =$_POST['ip'];
	$modelo          =$_POST['modelo'];
	$contador        =$_POST['contador'];
	$serie           =$_POST['serie'];
	
		
	//pegando nome do cliente e vinculando ID
	$sql1 = "SELECT  *  FROM cliente WHERE (`nome` = '".$cliente ."') ";
	$result1 = $conexao->query($sql1);	
		if ($result1->num_rows > 0) {		
			while($row1 = $result1->fetch_assoc()) {   
			 $id_cliente=$row1['id_cliente'];
			}
		};
		
		//pegar horario e data
		date_default_timezone_set('America/Sao_Paulo');
		$date = date('Y-m-d H:i');
		
		
		//inserindo dados na tabela cliente		
		$sql = "INSERT INTO impressora (id_cliente,comunidade,ip,oid_modelo,oid_contador,oid_serie,data_cadastro) values('$id_cliente','$comunidade','$ip','$modelo','$contador','$serie','$date')";
				
	if($conexao->query($sql) == TRUE){
		echo "Impressora cadastrada com sucesso !";
	}else{
		echo "Erro: " . $sql . "<br>" . $conexao->error;
	}

?>