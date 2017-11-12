<?php 

session_start();

if (!isset($_SESSION["logged"]))
	header("location: ./registre.php");
?>