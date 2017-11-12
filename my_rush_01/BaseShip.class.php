<?php

abstract class BaseShip
{
	abstract protected 	function setName();
	abstract protected 	function setPP();
	abstract protected 	function setHP();
	abstract protected 	function setSpeed();
	abstract public 	function Shoot();

	public function __construct($player)
	{
		$this->player = $player;
		$this->initData();
		$this->setName();
		$this->setPP();
		$this->setHP();
		$this->setSpeed();
	}
	protected function initData()
	{
		$this->dir = 1;
		$this->speed = 1;
		$this->active = false;
	}

	public function turnLeft()
	{
		if ($this->$dir == 1)
			$this->$dir = 4;
		else
			$this->$dir -= 1;
	}
	public function turnRight()
	{
		if ($this->$dir == 4)
			$this->$dir = 1;
		else
			$this->$dir += 1;
	}

	public function Move()
	{
		if ($this->$dir == 1)
			$this->$y -= random_int(1, 6) * $this->$speed * $this->$base_speed;
		if ($this->$dir == 2)
			$this->$x += random_int(1, 6) * $this->$speed * $this->$base_speed;
		if ($this->$dir == 3)
			$this->$y += random_int(1, 6) * $this->$speed * $this->$base_speed;
		if ($this->$dir == 4)
			$this->$x -= random_int(1, 6) * $this->$speed * $this->$base_speed;
	}

	public function getName()
	{
		return $this->$name;
	}

	public function setX($val)
	{
		$this->$x = $val;
	}

	public function setY($val)
	{
		$this->$y = $val;
	}

	public function getX()
	{
		return $this->$x;
	}

	public function getY()
	{
		return $this->$y;
	}
	public function Activate()
	{
		$this->active = true
	}
	public function Show()
	{
	return $this->name." ".$this->PP." ".$this->HP." ".$this->base_speed." ".$this->Shoot()."\n";
	}
}

require "SmallShip.class.php";
require "NormalShip.class.php";
require "BigShip.class.php";
?>