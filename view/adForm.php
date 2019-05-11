<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../assets/css/styleAdForm.css">
	<title></title>
</head>
<body>
<?php include "headerLogado.php";?>

<div class="advertise">
	<h1>Anúncio</h1>
    <form method="post" action="../model/anunciar.php">
    	<label>
	    	Diga o nome do salão:<input type="text" placeholder="max 20 caracteres" required="required" maxlength="15" name="titulo" />
	      Descrição: <textarea type="text" placeholder="max 400 caracteres" required="required" maxlength="200" name="descricao"></textarea>
      </label>
      <label>
      	Telefone para contato: <input type="number" required="required" maxlength="9" name="telefone" />
      	Email para contato: <input type="email" required="required" name="email" />	
      </label>
      <button type="submit" class="btn btn-primary btn-block btn-large">Anunciar</button>
    </form>
</div>
</body>
</html>