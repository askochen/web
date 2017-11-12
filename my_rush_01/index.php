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

				$p1 = new BigShip();
				echo $p1->Show();
				$p2 = new NormalShip();
				echo $p2->Show();
				$p3 = new SmallShip();
				echo $p3->Show();

				$pf = new Playfield();
				echo $pf->Show();
	?>
</body>
</html>
