<?php

require "Cell.class.php";
require "Player.class.php";
class Playfield
{
	public function __construct($name1, $name2)
	{
		$this->player[1] = new Player($this, $name1);
		$this->player[2] = new Player($this, $name2);
		$this->Load();
	}

	public function Show()
	{
		foreach ($this->player as $key => $value) {
			echo "plaer".$key." ".$value->Show();
		}
	}

	public function Load()
	{
		if (!isset($_SESSION["playfield"]))
		{
			$_SESSION["playfield"][$this->player[1]->getName()]['ship1'] = array("x" => 20, "y" => 10,  "active" => false, 'destroyed' = false );
			$_SESSION["playfield"][$this->player[1]->getName()]['ship2'] = array("x" => 20, "y" => 50,  "active" => false, 'destroyed' = false );
			$_SESSION["playfield"][$this->player[1]->getName()]['ship3'] = array("x" => 20, "y" => 90,  "active" => false, 'destroyed' = false );
			$_SESSION["playfield"][$this->player[2]->getName()]['ship1'] = array("x" => 130, "y" => 10,  "active" => false, 'destroyed' = false );
			$_SESSION["playfield"][$this->player[2]->getName()]['ship2'] = array("x" => 130, "y" => 50,  "active" => false, 'destroyed' = false );
			$_SESSION["playfield"][$this->player[2]->getName()]['ship3'] = array("x" => 130, "y" => 90,  "active" => false, 'destroyed' = false );			
		}

		for ($i = 1; $i < 3; $i++) { 
			for ($j = 1; $j < 4; $j++) { 
				$this->player[i]->ship[j]->setX($_SESSION["playfield"][[$this->player[i]->getName()]]['ship1']['x']);
				$this->player[i]->ship[j]->setY($_SESSION["playfield"][$this->player[i]->getName()]['ship1']['y']);
				if ($_SESSION["playfield"]$this->player[i]->getName()]['ship1']['hp']) {
					$this->player[i]->ship[j]->setHP($_SESSION["playfield"][$this->player[i]->getName()]['ship1']['hp']);
				}
				if ($_SESSION["playfield"][$this->player[i]->getName()]['ship1']['active']) {
					$this->player[i]->ship[j]->Activate();
				}
				if ($_SESSION["playfield"][$this->player[i]->getName()]['ship1']['destroyed']) {
					$this->player[i]->ship[j]->Destroy();
				}
				if ($_SESSION["playfield"][$this->player[i]->getName()]['ship1']['dir']) {
					$this->player[i]->ship[j]->setDir($_SESSION["playfield"][$this->player[i]->getName()]['ship1']['dir']);
				}
			}
		}
	}
}
?>