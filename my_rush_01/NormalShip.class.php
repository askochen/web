<?php

class NormalShip extends BaseShip
{
	protected function setName()
	{
		$this->name = "MilleniumFalcon";
	}
	protected function setPP()
	{
		$this->PP = 5;
	}
	protected function setHP()
	{
		$this->HP = 6;
	}
	protected function setSpeed()
	{
		$this->base_speed = 2;
	}
	protected function setWeapon()
	{
		$this->weapon = new SpaceGun($this);
	}
	public 	function getIndex()
	{
		return 2;
	}
		public 	function isShipCell($x, $y)
	{
		if ($this->dir == 1 || $this->dir == 3) {
			if (abs($this->x - $x) < 1 && abs($this->y - $y) < 3) {
				return true;
			}
		}
		else {
			if (abs($this->x - $x) < 3 && abs($this->y - $y) < 1) {
				return true;
			}
		}
		return false;
	}
}

?>