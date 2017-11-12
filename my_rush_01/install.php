<?php 

	session_start();
	if (!isset($_SESSION["game"]))
	{
		header("location: ./start.php");
	}
?>