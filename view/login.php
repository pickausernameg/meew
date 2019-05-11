<?php 
	session_start();
	if(isset($_SESSION['email'])){
		header("Location: ../view/");
		die();
	}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../assets/css/styleLogin.css">
	<title>Login</title>
</head>
<body>

<?php 
	include "header.php";
?>

	<div class="login">
		<h1>Login</h1>
	    <form method="post" action="../model/login.php">
	    	<input type="email" placeholder="Email" required="required" name="email"/>
        <input type="password" placeholder="Senha" required="required" name="senha" />
        <button type="submit" class="btn btn-primary btn-block btn-large lang">Deixe-me entrar.</button>
        <a href="sign.php" class="btn-block" style="text-decoration: none"><button type="button" class="btn btn-primary btn-block btn-large">Ainda não cadastrado?</button></a>
	    </form>
	</div>

</body>
</html>