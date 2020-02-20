<?php
	//tratamento de erros PHP
	error_reporting(0);
	ini_set(“display_errors”, 0 );
	
	//conexao com BANCO DE DADOS
	include("conexao.php");
	
	//Selecionar tabela com informações de O.I.D modelo,número de serie e contador;
	// tabela IMPRESSORA E ESPECIFICAR A ID do cliente
	$sql = "SELECT  * FROM impressora WHERE id_cliente=9 " ;
		
	$result = $conexao->query($sql);	
	
	if ($result->num_rows > 0) {		
	   while($row = $result->fetch_assoc()) {
		   
		   $id_impressora=$row['id_impressora'];
		   $id_cliente=$row['id_cliente'];
		   $comunidade=$row['comunidade'];
		   $oid_modelo=$row['oid_modelo'];
		   $oid_serie=$row['oid_serie'];
		   $oid_contador=$row['oid_contador'];
		   $ip=$row['ip'];		   

			//Nome do modelo do equipamento
			$sysname[0] = snmpget("$ip", "$comunidade", "$oid_modelo");
			$sysname[1] = eregi_replace("STRING:","",$sysname[0]);
			echo 'Modelo do Equipamento: '.$sysname[1]."</br>";
			
			
			//Numero de serie do equipamento
			$sysserie[0] = snmpget("$ip", "$comunidade", "$oid_serie");
			$sysserie[1] = eregi_replace("STRING:","",$sysserie[0]);
			echo 'Numero de Serie do Equipamento: '.$sysserie[1]."</br>";
			

			//Contador do equipamento
			$syscontador[0] = snmpget("$ip", "$comunidade", "$oid_contador");
			$syscontador[1] = eregi_replace("Counter32:","",$syscontador[0]);
			echo 'Contador do Equipamento: '.$syscontador[1]."</br>";
			
			
			echo "</br>";
			
			//pegar horario e data
		date_default_timezone_set('America/Sao_Paulo');
		$date = date('Y-m-d H:i');
		
		
		//inserindo dados na tabela DADOS
		
		$sql = "INSERT INTO dados (id_impressora,modelo,contador,serie,data_coleta)values('$id_impressora','$sysname[1]','$syscontador[1]','$sysserie[1]','$date')";
		
	
		if($conexao->query($sql) == TRUE){
		echo "DADOS salvos  com sucesso ! 	<br>";
			}else{
			echo "Erro: " . $sql . "<br>" . $conexao->error;
		}
					
	   }
	}
		
		
?>