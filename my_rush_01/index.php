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
					<a class="button" id="Left"></a>
					<a class="button" id="Right"></a>
					<a class="button" id="Go"></a>
					<br>
					<a class="button_fire" id="at1">Fire!</a>
					<br>
					<div class="Firefly"><img id="Firefly" src="img1.png"></div>
					<div class="MilleniumFalcon"><img id="MilleniumFalcon" src="img2.png"></div>
					<div class="Enterprise"><img id="Enterprise" src="img3.png"></div>
	  			</div>
			</div>
			<div class="login_2">
				<br>
				<p>Player_2: <?php echo $_SESSION["login_2"]." GREEN"; ?></p>
				<br>
				<div class="base_point">HP: 0 </div>
				<div class="base_point">Damage: 0</div>
				<div class="base_point">Speed: 0</div>
				<div class="base_point">PP: 0 </div>
				<div class="base_point">Range: 0</div>
				<br>
				<div class="button_menu">
					<a class="button" id="Left"></a>
					<a class="button" id="Right"></a>
					<a class="button" id="Go"></a>
					<br>
					<a class="button_fire" id="at1">Fire!</a>
					<br>
					<div class="Firefly"><img id="Firefly" src="img1.png"></div>
					<div class="MilleniumFalcon"><img id="MilleniumFalcon" src="img2.png"></div>
					<div class="Enterprise"><img id="Enterprise" src="img3.png"></div>
	  			</div>
			</div>
		</div>
	</body>
</html>
