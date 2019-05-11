	<?php 
	include "../model/config.php";

	$sql = $conn->query('SELECT * FROM anuncios');
	$rows = $sql->fetchAll();
	foreach($rows as $key => $value){ 
	echo "<div class='anuncios col-lg-5 col-xs-12'>
					<div class='pic col-lg-2 col-xs-3'>
					</div>
					<div class='titulo col-lg-8 col-xs-5'>".$value['titulo']."</div>
					<div class='description col-lg-8 col-xs-8'>".$value['descricao']."</div>
					<div class='contact col-lg-8 col-xs-12'>Telefone: ".$value['telefone']."</div>
					<div class='contact col-lg-8 col-xs-12'>Email: ".$value['email']."</div>

				</div>"
	;}
	?>