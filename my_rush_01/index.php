<?php require "install.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Warhammer 40000</title>
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
