<?php 

class Cell
{
	public function __construct($playfield,$c_x,$c_y)
	{
		$this->playfield = $playfield;
		$this->x = $c_x;
		$this->y = $c_y;
	}
}
?> 