<?php require "register_page.php" ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Spase Battle</title>
	<script src="./js/jquery-3.2.1.min.js"></script>
	<link rel="stylesheet" href="./Textures/style.css">
</head>
<body>
	<?php 
	require "BaseShip.class.php"; 
	require "Playfield.class.php"; 

				$pf = new Playfield("Player1", "Player2");
				echo $pf->Show();
	?>

		<div class="Players_menu">
			<header>
				<h1>Spase Battle</h1>
			</header>
			<div class="login_1">
				<br>
				<p>Player_1: <?php echo $_SESSION["login_1"]." RED"; ?></p>
				<br>
				<div class="base_point">HP: 0 </div>
				<div class="base_point">Damage: 0</div>
				<div class="base_point">Speed: 0</div>
				<div class="base_point">PP: 0 </div>
				<div class="base_point">Range: 0</div>
				<br>
				<div class="button_menu">
					<a class="button1" id="Left"></a>
					<a class="button1" id="Right"></a>
					<a class="button1" id="Go"></a>
					<br>
					<br>
					<a class="button_fire1" id="at1">Fire!</a>
					<br>
					<br>
					<div class="Firefly"><img id="Firefly" src="./Textures/img1.png" width="100" height="50"></div>
					<div class="MilleniumFalcon"><img id="MilleniumFalcon" src="./Textures/img2.png" width="100" height="50"></div>
					<div class="Enterprise"><img id="Enterprise" src="./Textures/img3.png" width="100" height="50"></div>
	  			</div>
			</div>
			<table >
				
			</table>
			
		</div>
	</body>
</html>
