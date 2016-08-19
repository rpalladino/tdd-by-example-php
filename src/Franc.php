<?php

class Franc extends Money
{
	public function __construct(int $amount)
    {
        $this->amount = $amount;
	}

	public function times(int $multiplier): Franc
    {
        return new Franc($this->amount * $multiplier);
    }

    public function equals(Money $franc)
    {
        return $this->amount === $franc->amount;
    }
}
