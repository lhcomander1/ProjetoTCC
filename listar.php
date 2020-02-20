<!doctype html>
<html>
<head>

  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	
    <title>Cadastrar Impressora</title>

	  <link rel="stylesheet" href="bootstrap/css/jquery-ui.css"/>
	  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"/>
	  <link rel="stylesheet" href="bootstrap/css/font-awesome.min.css"/>
	  <link rel="stylesheet" href="bootstrap/css/cep.css"/>  

</head>
<body>
<?php
// Conexão ao banco

include("conexao.php");


	//pegando nome do cliente e vinculando ID
	$sql = "SELECT nome_cliente,modelo,contador,serie,data_coleta 
			FROM dados ORDER BY nome_cliente ASC; " ;
		
	$result = $conexao->query($sql);	
	
	if ($result->num_rows > 0) {
			echo "<h1>TABELA DE DADOS COLETADOS PARA O TCC</h1>";
			echo'<div class="container">					                                                                                   
					<div class="table-responsive">          
					  <table class="table">
							<thead>
							  <tr>
								<th>Cliente</th>
								<th>Modelo</th>
								<th>Contador</th>
								<th>Serie</th>
								<th>Data Coleta</th>								
							  </tr>
							</thead>
					    </table>
					 </div>
				</div>';			
	   while($row = $result->fetch_assoc()) {		   
		   //tabela de retorno de dados
				echo'<div class="container">					                                                                                   
						<div class="table-responsive">          
							<table class="table">
								<tbody>
									  <tr>
										<td>'.$row['nome_cliente'].'</td>
										<td>'.$row['modelo'].'</td>
										<td>'.$row['contador'].'</td>
										<td>'.$row['serie'].'</td>
										<td>'.$row['data_coleta'].'</td>										
									  </tr>
								</tbody>
							</table>
						</div>
					</div>'; 	   
	   }
	}
?>
</body>
</html>

