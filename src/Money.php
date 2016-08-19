<?php

abstract class Money
{
	protected $amount;
	protected $currency;

	public static function dollar(int $amount): Money
	{
		return new Dollar($amount, "USD");
	}

	public static function franc(int $amount): Money
	{
		return new Franc($amount, "CHF");
	}

    public function equals(Money $money)
    {
        return $this->amount === $money->amount
			&& static::class === get_class($money);
    }

	abstract public function times(int $amount);

	public function currency(): string
	{
		return $this->currency;
	}
}
