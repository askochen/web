<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Spase Battle</title>
	<link rel="stylesheet" href="./Textures/style.css">
	<link href="https://fonts.googleapis.com/css?family=Pangolin" rel="stylesheet">
	<script src="./js/jquery-3.2.1.min.js"></script>
</head>
<body>
	<?php 
	require "BaseShip.class.php"; 
	require "Playfield.class.php"; 

				$pf = new Playfield("player1", "Player2");
				echo $pf->Show();
	?>
</body>
</html>
