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
		$this->weapon = new Laser;
	}
}

?>