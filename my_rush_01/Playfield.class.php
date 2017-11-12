<?php

require "Cell.class.php";
require "Player.class.php";
class Playfield
{
	public function __construct($name1, $name2)
	{
		for ($i=0; $i < 150; $i++) { 
			for ($j=0; $j < 100; $j++) { 
				$this->field[$i][$j] = new Cell($this, $i, $j);
			}
		}
		$this->player[1] = new Player($this, $name1);
		$this->player[2] = new Player($this, $name2);
	}

	public function Show()
	{
		foreach ($this->player as $key => $value) {
			echo "plaer".$key." ".$value->Show();
		}
	}
}
?>