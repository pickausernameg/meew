<?php 
session_start();
if(isset($_GET['logout'])){
	session_destroy();
	header("Location: index.php");
	die();
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../assets/css/styleIndex.css">
	<title>Home</title>
</head>
<body>

<!--Menu Desktop-->
<?php
	if(isset($_SESSION['email'])){
		include "headerLogado.php";
	}else{
		include "header.php";
	}
?>

<!--Menu Mobile-->

<div class="tudo">
	<div class="TranspBox col-lg-12 col-xs-12" id="TranspBox">
		<?php 
			include "IndexList.php";
		?>
	</div>

</div>
</body>
</html>