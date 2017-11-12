<?php 
	session_start();
	function auth($log, $pas)
	{
		$player = file("./data/data.csv");
		foreach ($player as $var => $elem)
		{
			$tmp = explode(";", $elem);
			unset($player[$var]);
			$player[$tmp[0]] = $tmp[1];
		}
		foreach ($player as $var => $elem) 
		{
			if ($var == $log && $elem == $pas)
			{
				return true;
			}
			if ($var == $log && $elem != $pas)
			{
				return false;
			}
		}
		file_put_contents("./data/data.csv", $log.";".$pas.";\n", FILE_APPEND);
		return true;
	}
	if (isset($_POST["login_1"]) && !empty($_POST["login_1"]) && isset($_POST["password_1"]) && !empty($_POST["password_1"]) && isset($_POST["login_2"])  &&  !empty($_POST["login_2"]) &&  isset($_POST["password_2"]) && !empty($_POST["password_2"]))
	{
		if (auth($_POST["login_1"], $_POST["password_1"]) && auth($_POST["login_2"], $_POST["password_2"]))
		{
			$_SESSION["game"] = 1;
			$_SESSION["login_1"] = $_POST["login_1"];
			$_SESSION["login_2"] = $_POST["login_2"];
			header("location: ./index.php");
		}
		else
		{
			header("location: ./error.php");
		}
	}
	else
	{
			header("location: ./error.php");
	}
?>