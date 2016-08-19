<?php

class Franc extends Money
{
	public function __construct(int $amount, string $currency)
    {
        $this->amount = $amount;
        $this->currency = "CHF";
	}

	public function times(int $multiplier): Money
    {
        return Money::franc($this->amount * $multiplier);
    }
}
