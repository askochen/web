<?php session_start(); ?>
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

	require "Playfield.class.php"; 
				echo "creating Playfield";
				$pf = new Playfield("Player1", "Player2");

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
				<?php

				$i = 0;
				while($i < 100)
				{
					$j = 0;
					echo "<tr>";
					while($j < 150)
					{
						if($pf->isCellWithShip($j,$i))
							echo "<td style=\"background: red; box-shadow: 1px 0px 20px 12px red;\" id=\"$i$j\"></td>";
						else if ($pf->isCellWithAsteroid($j,$i))
							echo "<td style=\"background: blue; box-shadow: 1px 0px 20px 12px blue;\" id=\"$i$j\"></td>";
						else
							echo "<td id=\"$i$j\"></td>";
						$j++;
					}
					$i++;
					echo "</tr>";
				}
			?>
			</table>
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
					<a class="button2" id="Left"></a>
					<a class="button2" id="Right"></a>
					<a class="button2" id="Go"></a>
					<br>
					<br>
					<a class="button_fire2" id="at1">Fire!</a>
					<br>
					<br>
					<div class="Firefly"><img id="Firefly" src="./Textures/img1.png" width="100" height="50"></div>
					<div class="MilleniumFalcon"><img id="MilleniumFalcon" src="./Textures/img2.png" width="100" height="50"></div>
					<div class="Enterprise"><img id="Enterprise" src="./Textures/img3.png" width="100" height="50"></div>
	  			</div>
			</div>
		</div>
	</body>
</html>
