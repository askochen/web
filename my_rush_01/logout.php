<?php 

	session_start();
	unset($_SESSION["game"]);
	unset($_SESSION["login_1"]);
	unset($_SESSION["login_2"]);
	session_unset();
	header("location: ./index.php");

?>
