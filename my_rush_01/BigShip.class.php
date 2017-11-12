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
		if ($this->destroyed) {
			return false;
		}
		if ($this->dir == 1 || $this->dir == 3) {
			if (abs(intval($this->x) - intval($x)) < 2 && abs(intval($this->y) - intval($y)) < 5) {
				return true;
			}
		}
		else {
			if (abs(intval($this->x) - intval($x)) < 5 && abs(intval($this->y) - intval($y)) < 2) {
				return true;
			}
		}
		return false;
	}
}

?>