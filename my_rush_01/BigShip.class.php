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
	public function Shoot()
	{
		return 4;
	}
}

?>