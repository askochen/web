<?php
	require "BaseShip.class.php"; 
class Player
{
	public function __construct($playfield, $name)
	{
		$this->playfield = $playfield;
		$this->name = $name;
		$this->ship[1] = new BigShip($this);
		$this->ship[2] = new NormalShip($this);
		$this->ship[3] = new SmallShip($this);
	}

	public function ChooseShip($index)
	{
		if(!$this->active)		
		{
			$this->active = $index;
			$this->ship[$index]->Activate();
		}
	}

	public function getName()
	{
		return $this->name;
	}

	public function pressTurnLeft()
	{
		if ($this->active) {
			$this->ship[$this->active]->turnLeft();
		}
	}

	public function pressTurnRight()
	{
		if ($this->active) {
			$this->ship[$this->active]->turnRight();
		}
	}

	public function pressMove()
	{
		if ($this->active) {
			$this->ship[$this->active]->Move();
		}
	}

	public function pressShoot()
	{
		if ($this->active) {
			$this->ship[$this->active]->Shoot();
		}
	}

	public function Show()
	{
		return $this->ship[1]->Show().$this->ship[2]->Show().$this->ship[3]->Show();
	}
}
?>