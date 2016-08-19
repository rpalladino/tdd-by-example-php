<?php

class Dollar extends Money
{
	public function __construct(int $amount)
    {
        $this->amount = $amount;
	}

	public function times(int $multiplier): Dollar
    {
        return new Dollar($this->amount * $multiplier);
    }

    public function equals(Money $dollar)
    {
        return $this->amount === $dollar->amount;
    }
}
