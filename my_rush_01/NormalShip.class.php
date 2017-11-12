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
		$this->weapon = new SpaceGun;
	}
}

?>