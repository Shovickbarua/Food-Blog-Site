<?php
session_start();
unset($_SESSION["email"]);
	HEADER('LOCATION:login_page.php');	

?>