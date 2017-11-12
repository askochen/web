<?php

require "Cell.class.php";

class Playfield
{
	public function __construct()
	{
		for ($i=0; $i < 150; $i++) { 
			for ($j=0; $j < 100; $j++) { 
				$this->field[$i][$j] = new Cell($this, $i, $j);
			}
		}
	}

	public function Show()
	{
		$counter = 0;
		for ($i=0; $i < 150; $i++) { 
			for ($j=0; $j < 100; $j++) { 
				if ($this->field[$i][$j]->x == $i && $this->field[$i][$j]->y == $j) {
					$counter++;
				}
			}
		}
		return $counter;
	}
}
?>