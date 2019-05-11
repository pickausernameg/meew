<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../assets/css/styleSign.css">
	<title>Login</title>
</head>
<body>

<?php 
	include "header.php";
?>

	<div class="sign">
		<h1>Cadastrar</h1>
	    <form method="post" action="../model/cadastrar.php">
	    	<label>
		    	<div>Nome:<input type="text" placeholder="Nome" required="required" name="nome" /></div>
		    	<div>Sobrenome:<input type="text" placeholder="Sobrenome" required="required" name="sobrenome" /></div>
	    	</label>
	    	<label>
	    		<div>Email:<input type="text" placeholder="Email" required="required" name="email" /></div>
        	<div>Senha:<input type="password" placeholder="Senha" required="required" name="senha" /></div>
     	 	</label>
	    	
	    	<label>
					<div>CEP:<input type="text" placeholder="CEP" required="required" value="" id="cep" onblur="pesquisacep(this.value);" maxlength="8" name="cep" /></div>
		    	<div>Rua:<input type="text"  id="rua" name="rua" disabled /></div>
	    	</label>
		    <label>
		    	<div>Bairro:<input type="text"  value="" id="bairro" name="bairro" disabled /></div>
	        <div>Cidade:<input type="text"  value="" id="cidade" name="cidade" disabled /></div>
	      </label>
	      <label>
	        <div>Número:<input type="text" placeholder="Numero" value="" id="numero" name="numero" /></div>
        </label>

        <button type="submit" class="btn btn-primary btn-block btn-large lang">Criar Conta.</button>
	    </form>
	</div>

<script type="text/javascript" src="../assets/js/BuscaCep.js"></script>
</body>
</html>