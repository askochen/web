<?php

class SmallShip extends BaseShip
{
	protected function setName()
	{
		$this->name = "FireFly";
	}
	protected function setPP()
	{
		$this->PP = 3;
	}
	protected function setHP()
	{
		$this->HP = 4;
	}
	protected function setSpeed()
	{
		$this->base_speed = 4;
	}
	protected function setWeapon()
	{
		$this->weapon = new Laser($this);
	}
	public 	function getIndex()
	{
		return 3;
	}
		public 	function isShipCell($x, $y)
	{
		if ($this->dir == 1 || $this->dir == 3) {
			if (abs(intval($this->x) - intval($x)) < 1 && abs(intval($this->y) - intval($y)) < 2) {
				return true;
			}
		}
		else {
			if (abs(intval($this->x) - intval($x)) < 2 && abs(intval($this->y) - intval($y)) < 1) {
				return true;
			}
		}
		return false;
	}
}

?>