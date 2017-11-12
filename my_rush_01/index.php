<?php 
	require "install.php"; 
?>
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

		if($_GET['player'] == 1 )
				{
					
					if (isset($_GET["left"]))
					{
						$pf->player[1]->ship[$pf->player[1]->isActive()]->turnLeft();
					}
					if (isset($_GET["right"]))
					{
						$pf->player[1]->ship[$pf->player[1]->isActive()]->turnRight();
					}
					if (isset($_GET["move"]))
					{
						$pf->player[1]->ship[$pf->player[1]->isActive()]->Move();
					}
					if (isset($_GET["left"]))
					{
						$pf->player[1]->ship[$pf->player[1]->isActive()]->Shoot();
					}
				}
				else if($_GET['player'] == 2 && $_SESSION["checker"] == 2 && !isset($_GET["fire"]))
				{
					if (isset($_GET["left"]))
					{
						$pf->player[2]->ship[$pf->player[2]->isActive()]->turnLeft();
					}
					if (isset($_GET["right"]))
					{
						$pf->player[2]->ship[$pf->player[2]->isActive()]->turnRight();
					}
					if (isset($_GET["move"]))
					{
						$pf->player[2]->ship[$pf->player[2]->isActive()]->Move();
					}
					if (isset($_GET["shoot"]))
					{
						$pf->player[2]->ship[$pf->player[2]->isActive()]->Shoot();
					}
				}
		?>
			<div class="Players_menu">
				<header>
					<h1>Space Battle</h1>
					<a href="logout.php" class="logout">Log Out</a>
				</header>
				<div class="login_1">
					<br>
					<p>Player_1: <?php echo $_SESSION["login_1"]." RED"; ?></p>
					<br>
						<div class="base_point">HP: <?php 
												$ship = $pf->player[2]->isActive();
												if ($ship) {
													echo $pf->player[2]->ship[$ship]->getHP();
												}
												else
													echo "0"; ?> </div>
					<div class="base_point">Damage: <?php 
												$ship = $pf->player[2]->isActive();
												if ($ship) {
													echo $pf->player[2]->ship[$ship]->getDamage();
												}
												else
													echo "0"; ?></div>
					<div class="base_point">Speed: <?php 
												$ship = $pf->player[2]->isActive();
												if ($ship) {
													echo $pf->player[2]->ship[$ship]->getSpeed();
												}
												else
													echo "0"; ?></div>
					<div class="base_point">PP: <?php 
												$ship = $pf->player[2]->isActive();
												if ($ship) {
													echo $pf->player[2]->ship[$ship]->getPP();
												}
												else
													echo "0"; ?> </div>
					<div class="base_point">Range: <?php 
												$ship = $pf->player[2]->isActive();
												if ($ship) {
													echo $pf->player[2]->ship[$ship]->getDamage();
												}
												else
													echo "0"; ?></div>
					<br>
					<div class="button_menu">
						<a class="button1" id="Left" href="index.php?player=1&left=1">Left</a>
						<a class="button1" id="Right" href="index.php?player=1&right=1">Right</a>
						<a class="button1" id="Go" href="index.php?player=1&move=1">Go</a>
						<br>
						<br>
						<a class="button_fire1" id="at1" href="index.php?player=1&shoot=1">Fire!</a>
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
							$bool = $pf->isCellWithShip($j,$i);
							if($bool)
							{
								if ($bool == 1)
								echo "<td style=\"background: red; \" id=\"$i$j\"></td>";
								else
									echo "<td style=\"background: green; \" id=\"$i$j\"></td>";
							}
							else if ($pf->isCellWithAsteroid($j,$i))
								echo "<td style=\"background: blue; \" id=\"$i$j\"></td>";
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
					<div class="base_point">HP: <?php 
												$ship = $pf->player[2]->isActive();
												if ($ship) {
													echo $pf->player[2]->ship[$ship]->getHP();
												}
												else
													echo "0"; ?> </div>
					<div class="base_point">Damage: <?php 
												$ship = $pf->player[2]->isActive();
												if ($ship) {
													echo $pf->player[2]->ship[$ship]->getDamage();
												}
												else
													echo "0"; ?></div>
					<div class="base_point">Speed: <?php 
												$ship = $pf->player[2]->isActive();
												if ($ship) {
													echo $pf->player[2]->ship[$ship]->getSpeed();
												}
												else
													echo "0"; ?></div>
					<div class="base_point">PP: <?php 
												$ship = $pf->player[2]->isActive();
												if ($ship) {
													echo $pf->player[2]->ship[$ship]->getPP();
												}
												else
													echo "0"; ?> </div>
					<div class="base_point">Range: <?php 
												$ship = $pf->player[2]->isActive();
												if ($ship) {
													echo $pf->player[2]->ship[$ship]->getDamage();
												}
												else
													echo "0"; ?></div>
					<br>
					<div class="button_menu">
						<a class="button2" id="Left" href="index.php?player=1&x=-1">Left</a>
						<a class="button2" id="Right" href="index.php?player=1&x=1">Right</a>
						<a class="button2" id="Go_Up" href="index.php?player=1&y=-1">Go Up</a>
						<a class="button2" id="Go_Down" href="index.php?player=1&y=1">Go Down</a>
						<br>
						<br>
						<a class="button_fire2" id="at2" href="index.php?player=1&fire=1">Fire!</a>
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
