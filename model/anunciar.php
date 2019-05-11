<?php 
include "../model/config.php";
$sql = $conn->prepare("  
                INSERT INTO anuncios (titulo,img,descricao,telefone,email) VALUES (?,?,?,?,?)");

$sql->execute(array(
    $_POST['titulo'],
    'handshake.png',
    $_POST['descricao'],
    +$_POST['telefone'],
    $_POST['email'],
));

header("Location:../view/uploadimg.php");
?>