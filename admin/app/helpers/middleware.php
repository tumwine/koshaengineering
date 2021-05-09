<?php 
function adminOnly($redirect = "/index.php")
{
	 if (empty($_SESSION["role"])) {
   	  $_SESSION["message"] = "You are not authorised";
   	  $_SESSION["type"] = "error";
   	  header("location: " . BASE_URL . $redirect);
   	  exit();
   }
} 

?>

