<?php
session_start();
include "config.php";
print_r($_POST);
$sql = $conn->prepare("
    SELECT email, senha
    FROM usuario
    WHERE email = ? AND senha = ?");
$sql->execute(array($_POST['email'],$_POST['senha']));


if($sql->rowCount() == 1){
	$_SESSION['email'] = $_POST['email'];
    $_SESSION['senha'] = $_POST['senha'];  
	header("Location: ../view/");
}else{
	header("Location: ../view/login.php");
}

 ?>
