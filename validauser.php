<?php
    
	error_reporting(0);
	ini_set(“display_errors”, 0 );
	
	include("conexao.php");  

	$usuario =  ($_POST['usuario']);
	$senha   =  ($_POST['senha']);	
	
	
	// Select na tabela usuarios
	$sql = "SELECT  * FROM usuario WHERE (`usuario` = '".$usuario ."') AND (`senha` = '". ($senha) ."') " ;	 
	$result = $conexao->query($sql);	
		if ($result->num_rows > 0) {		
			while($row = $result->fetch_assoc()) {    
       // Salva os dados encontrados
		$cnpj=$row['cnpj'];	   
		$usuario=$row['usuario'];
        $nivel=$row['nivel'];
		$senha=$row['senha'];
		
		echo "cnpj : "."$cnpj</br>";
		echo "nome : "."$usuario</br>";
		echo "senha : "."$senha</br>";
	   echo "nivel do usuario : "."$nivel</br>";      
		    }
	   } else {
			header("Location: index.php");
			}
			$conexao->close();
    
  ?>