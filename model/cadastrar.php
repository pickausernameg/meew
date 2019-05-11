<?php

include "../model/config.php";
print_r($_POST);
$sql = $conn->prepare("  
                INSERT INTO usuario (nome,sobrenome,email,senha,cep,rua,bairro,cidade,numero) VALUES (?,?,?,?,?,?,?,?,?)");

$sql->execute(array(
    $_POST['nome'],
    $_POST['sobrenome'],
    $_POST['email'],
    $_POST['senha'],
    +$_POST['cep'],
    $_POST['rua'],
    $_POST['bairro'],
    $_POST['cidade'],
    $_POST['numero']
));

header("Location:../view/");
?>