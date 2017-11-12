<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Spase Battle</title>
		<script src="./js/jquery-3.2.1.min.js"></script>
		<link rel="stylesheet" href="./Textures/style.css">
	</head>
	<body>
		<div class="message">
			<header>
				<h1>REGISTER FORM</h1>
			</header>
				<div class="form_container">
					<div class="form">
						<h2>Player 1:</h2>	
						<form action="login.php" method="POST">
							Login: <input type="text" name="login_1">
							Password: <input type="password" name="password_1">
							<h2>Player 2:</h2>	
							Login: <input type="text" name="login_2">
							Password: <input type="password" name="password_2">
							<input type="submit" value="OK">
						</form>
					</div>
				</div>
		</div>
	</body>
</html>