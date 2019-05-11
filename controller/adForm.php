<?php
if (session_status() == PHP_SESSION_NONE) {
  header("Location:../view/login.php");
}

else{
  header("Location:../view/adForm.php");
}

?>