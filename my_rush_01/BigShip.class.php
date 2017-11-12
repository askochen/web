<?php

class BigShip extends BaseShip
{
	protected function setName()
	{
		$this->name = "Enterprise";
	}
	protected function setPP()
	{
		$this->PP = 7;
	}
	protected function setHP()
	{
		$this->HP = 10;
	}
	protected function setSpeed()
	{
		$this->base_speed = 1;
	}
	protected function setWeapon()
	{
		$this->weapon = new Anigilator($this);
	}
	public 	function getIndex()
	{
		return 1;
	}
	public 	function isShipCell($x, $y)
	{
		if ($this->dir == 1 || $this->dir == 3) {
			if (abs($this->x - $x) < 2 && abs($this->y - $y) < 5) {
				return true;
			}
		}
		else {
			if (abs($this->x - $x) < 5 && abs($this->y - $y) < 2) {
				return true;
			}
		}
		return false;
	}
}

?>