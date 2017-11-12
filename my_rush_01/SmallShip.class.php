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
	public function Shoot()
	{
		return 1;
	}
}

?>