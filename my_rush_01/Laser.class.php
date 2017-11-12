<?php
class Laser extends Weapon
{
	protected 	function setName()
	{
		$this->name = "laser";
	}
	protected 	function setRange()
	{
		$this->range = 5;
	}
	protected 	function setDamage()
	{
		$this->damage = 1;
	}
}

?>