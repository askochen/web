<?php 

session_start();

function auth($log, $pas) {
	$users = file("./data/users.csv");

	foreach ($users as $key => $value) {
		$temp = explode(";", $value);
		unset($users[$key]);
		$users[$temp[0]] = $temp[1];
	}
	
	foreach ($users as $key => $value) {
		if ($key == $log && $value == $pas)
			return true;
		if ($key == $log && $value != $pas)
			return false;
	}

	file_put_contents("./data/users.csv", $log.";".$pas.";\n", FILE_APPEND);
	return true;
}

if (isset($_POST["loggin_1"]) && !empty($_POST["loggin_1"]) &&  isset($_POST["log2"]) && !empty($_POST["log2"]) &&  isset($_POST["pas1"]) && !empty($_POST["pas1"]) &&  isset($_POST["pas2"]) && !empty($_POST["pas2"]))
{
	if (auth($_POST["log1"], $_POST["pas1"]) && auth($_POST["log2"], $_POST["pas2"]))
	{
		$_SESSION["logged"] = 1;
		$_SESSION["log1"] = $_POST["log1"];
		$_SESSION["log2"] = $_POST["log2"];
		header("location: ./index.php");
	}
	else
		header("location: ./fail.php");
}
else
		header("location: ./fail.php");

?>