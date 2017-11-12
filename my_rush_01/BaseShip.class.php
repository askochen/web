<?php
require "Weapon.class.php";
abstract class BaseShip
{
	abstract protected 	function setName();
	abstract protected 	function setPP();
	abstract protected 	function setHP();
	abstract protected 	function setSpeed();
	abstract protected 	function setWeapon();
	abstract public 	function getIndex();
	abstract public 	function isShipCell($x, $y);
	public function __construct($player)
	{
		$this->player = $player;
		$this->initData();
		$this->setName();
		$this->setPP();
		$this->setHP();
		$this->setSpeed();
		$this->setWeapon();
	}
	protected function initData()
	{
		$this->dir = 1;
		$this->speed = 1;
		$this->active = false;
	}

	public function setDir($value)
	{
		$this->dir = $value;
	}
	public function turnLeft()
	{
		if ($this->dir == 1)
			$this->dir = 4;
		else
			$this->dir -= 1;
		$_SESSION["playfield"][$this->player->getName()]['ship'.$this->getIndex()]['dir'] = $this->dir;
	}
	public function turnRight()
	{
		if ($this->dir == 4)
			$this->dir = 1;
		else
			$this->dir += 1;
		$_SESSION["playfield"][$this->player->getName()]['ship'.$this->getIndex()]['dir'] = $this->dir;
	}

	public function Move()
	{
		if ($this->dir == 1)
			$this->y -= random_int(1, 6) * $this->speed * $this->base_speed;
		if ($this->dir == 2)
			$this->x += random_int(1, 6) * $this->speed * $this->base_speed;
		if ($this->dir == 3)
			$this->y += random_int(1, 6) * $this->speed * $this->base_speed;
		if ($this->dir == 4)
			$this->x -= random_int(1, 6) * $this->speed * $this->base_speed;
		$_SESSION["playfield"][$this->player->getName()]['ship'.$this->getIndex()]['x'] = $this->x;
		$_SESSION["playfield"][$this->player->getName()]['ship'.$this->getIndex()]['y'] = $this->y;
	}

	public function getName()
	{
		return $this->name;
	}

	public function setX($val)
	{
		$this->x = $val;
	}

	public function changeHP($val)
	{
		$this->HP = $val;
	}

	public function setY($val)
	{
		$this->y = $val;
	}

	public function getX()
	{
		return $this->x;
	}

	public function getY()
	{
		return $this->y;
	}
	public function Activate()
	{
		$this->active = true;
		$_SESSION["playfield"][$this->player->getName()]['ship'.$this->getIndex()]['active'] = $this->active;
	}
	public function Shoot()
	{
		$playfield = $this->player->playfield;
		foreach ($playfield->player as $key => $value) {
			if ($value->getName() !== $this->name ) {
				for ($i = 1; $i < 4; $i++) { 
					$x = $value->ship[i]->getX();
					$y = $value->ship[i]->getY();
					if ($this->dir == 1) {
						if ($this->x == $x && ($this->y - $y) <= $this->weapon->getRange()) {
							$value->ship[i]->takeDamage($this->weapon->getDamage());
						}
					}
					if ($this->dir == 2) {
						if ($this->y == $y && ($x - $this->x ) <= $this->weapon->getRange()) {
							$value->ship[i]->takeDamage($this->weapon->getDamage());
						}
					}
					if ($this->dir == 3) {
						if ($this->x == $x && ($y - $this->y) <= $this->weapon->getRange()) {
							$value->ship[i]->takeDamage($this->weapon->getDamage());
						}
					}
					if ($this->dir == 4) {
						if ($this->y == $y && ($this->x - $x) <= $this->weapon->getRange()) {
							$value->ship[i]->takeDamage($this->weapon->getDamage());
						}
					}
				}
			}
		}
		
	}
	public function takeDamage($dam)
	{
		$this->HP -= $dam;
		$_SESSION["playfield"][$this->player->getName()]['ship'.$this->getIndex()]['hp'] = $this->HP;
		if ($this->HP <= 0) {
			$this->Destoy();
		}
	}
	public function Destoy()
	{
		$this->destroyed = true;
		$_SESSION["playfield"][$this->player->getName()]['ship'.$this->getIndex()]['destroyed'] = $this->destroyed;
	}
	public function Show()
	{
	return $this->name." ".$this->PP." ".$this->HP." ".$this->base_speed." "."\n";
	}
}

require "SmallShip.class.php";
require "NormalShip.class.php";
require "BigShip.class.php";
?>