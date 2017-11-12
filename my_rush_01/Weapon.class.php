<?php
abstract class Weaopn
{
	abstract protected 	function setName();
	abstract protected 	function setRange();
	abstract protected 	function setDamage();

	public function __construct($ship)
	{
		$this->ship = $ship;
		$this->setName();
		$this->setRange();
		$this->setDamage();
	}

	public function getName()
	{
		return $this->name;
	}
	public function getRange()
	{
		return $this->range;
	}
	public function getDamage()
	{
		return $this->damage;
	}
require "Laser.class.php";
require "SpaceGun.class.php";
require "Anigilator.class.php";
?>