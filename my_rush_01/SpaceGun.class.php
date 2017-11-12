<?php
class SpaceGun extends Weapon
{
	protected 	function setName()
	{
		$this->name = "space gun";
	}
	protected 	function setRange()
	{
		$this->range = 10;
	}
	protected 	function setDamage()
	{
		$this->damage = 2;
	}
}

?>