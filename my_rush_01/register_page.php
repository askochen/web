<?php 

session_start();

if (!isset($_SESSION["playfield"]))
	header("location: ./registre.php");
?>