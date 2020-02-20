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
<br />
<br />
  <div class="container">

    <div class="row">

      <div class="col-md-4 col-md-offset-4">

        <form method="post" action="insere.php" name="frmcpf">

          <br />
		  <h2>Cadastro de Impressora</h2><br />	
		  <!-- <label for="comunidade">Nome do Cliente*:</label>
          <input name="cliente" id="cliente" class="form-control" required>
          <br />--> 
			
          <label for="comunidade">Comunidade*:</label>
          <input name="comunidade" id="comunidade" class="form-control" required>
          <br />

          <label for="ip">Internet Protocol(IP):</label>
          <input  name="ip" id="ip" class="form-control">
          <br />

          <label for="modelo"> O.I.D Modelo*:</label>
          <input name="modelo" id="modelo" class="form-control" required>
          <br />

          <label for="contador">O.I.D Contador*:</label>
          <input name="contador" id="contador" class="form-control" required">
          <br />
		  
		  <label for="serie">O.I.D Numero de Serie*:</label>
          <input name="serie" id="serie" class="form-control" required>
          <br />
		  
          <button type="submit" class="btn btn-primary btn-lg col-xs-12">Enviar</button>

        </form>

      </div>

    </div>
 
  </div>
 
</body>
</html>