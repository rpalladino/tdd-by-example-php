<?php

class Franc extends Money
{
    private $amount;

	public function __construct(int $amount)
    {
        $this->amount = $amount;
	}

	public function times(int $multiplier): Franc
    {
        return new Franc($this->amount * $multiplier);
    }

    public function equals(Franc $franc)
    {
        return $this->amount === $franc->amount;
    }
}
