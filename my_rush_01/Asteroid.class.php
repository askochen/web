<?php 
class Asteroid
{
	public function __construct()
	{

	}
	public function setXY($x, $y)
	{
		$this->x = $x;
		$this->y = $y;
	}

	public function isPointOnAsteroid($x, $y)
	{
		if (abs($this->x - $x) < 2 && abs($this->y - $y) < 2) {
			return true;
		}
		return false;
	}
}


?>