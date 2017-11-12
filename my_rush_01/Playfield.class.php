<?php

require "Cell.class.php";
require "Player.class.php";
require "Asteroid.class.php";
class Playfield
{
	public function __construct($name1, $name2)
	{
		$this->player[1] = new Player($this, $name1);
		$this->player[2] = new Player($this, $name2);
		$this->Load();
		$this->createAsteroids();
	}
	protected function createAsteroids()
	{
		$this->asteroid_num = 5;
		for ($i=1; $i < $this->asteroid_num + 1; $i++) { 
					$this->asteroid[$i] = new Asteroid;
				}	
		$this->asteroid[1]->setXY(50, 15);		
		$this->asteroid[2]->setXY(100, 30);		
		$this->asteroid[3]->setXY(50, 45);		
		$this->asteroid[4]->setXY(100, 60);		
		$this->asteroid[5]->setXY(50, 75);			

	}

	public function Show()
	{
		foreach ($this->player as $key => $value) {
			echo "player".$key." ".$value->Show();
		}
	}

	public function Load()
	{
			echo "Load";
		if (!isset($_SESSION["playfield"]))
		{
			$_SESSION["playfield"][$this->player[1]->getName()]['ship1'] = array("x" => 20, "y" => 10,  "active" => false, 'destroyed' => false );
			$_SESSION["playfield"][$this->player[1]->getName()]['ship2'] = array("x" => 20, "y" => 50,  "active" => false, 'destroyed' => false );
			$_SESSION["playfield"][$this->player[1]->getName()]['ship3'] = array("x" => 20, "y" => 90,  "active" => false, 'destroyed' => false );
			$_SESSION["playfield"][$this->player[2]->getName()]['ship1'] = array("x" => 130, "y" => 10,  "active" => false, 'destroyed' => false );
			$_SESSION["playfield"][$this->player[2]->getName()]['ship2'] = array("x" => 130, "y" => 50,  "active" => false, 'destroyed' => false );
			$_SESSION["playfield"][$this->player[2]->getName()]['ship3'] = array("x" => 130, "y" => 90,  "active" => false, 'destroyed' => false );			
		}

		for ($i = 1; $i < 3; $i++) { 
			for ($j = 1; $j < 4; $j++) { 
				$this->player[$i]->ship[$j]->setX($_SESSION["playfield"][$this->player[$i]->getName()]['ship'.$j]['x']);
				$this->player[$i]->ship[$j]->setY($_SESSION["playfield"][$this->player[$i]->getName()]['ship'.$j]['y']);
				if ($_SESSION["playfield"][$this->player[$i]->getName()]['ship'.$j]['hp']) {
					$this->player[$i]->ship[$j]->changeHP($_SESSION["playfield"][$this->player[$i]->getName()]['ship'.$j]['hp']);
				}
				if ($_SESSION["playfield"][$this->player[$i]->getName()]['ship'.$j]['active']) {
					$this->player[$i]->ship[$j]->Activate();
				}
				if ($_SESSION["playfield"][$this->player[$i]->getName()]['ship'.$j]['destroyed']) {
					$this->player[$i]->ship[$j]->Destroy();
				}
				if ($_SESSION["playfield"][$this->player[$i]->getName()]['ship'.$j]['dir']) {
					$this->player[$i]->ship[$j]->setDir($_SESSION["playfield"][$this->player[$i]->getName()]['ship'.$j]['dir']);
				}
			}
		}
	}

	public function isCellWithShip($index_i, $index_j)
	{
		for ($i = 1; $i < 3; $i++) { 
			for ($j = 1; $j < 4; $j++) { 
				if ($this->player[$i]->ship[$j]->isShipCell($index_i, $index_j)) {
					return true;
				}
			}
		}
		return false;
	}
	public function isCellWithAsteroid($index_i, $index_j)
	{
		for ($i = 1; $i < $this->asteroid_num + 1; $i++) { 
				if ($this->asteroid[$i]->isPointOnAsteroid($index_i, $index_j)) {
					return true;
			}
		}
		return false;
	}
}
?>