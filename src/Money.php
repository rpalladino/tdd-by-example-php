<?php

abstract class Money
{
	protected $amount;

	public static function dollar(int $amount): Money
	{
		return new Dollar($amount);
	}

	public static function franc(int $amount): Money
	{
		return new Franc($amount);
	}

    public function equals(Money $money)
    {
        return $this->amount === $money->amount
			&& static::class === get_class($money);
    }

	abstract public function times(int $amount);

	abstract public function currency(): string;
}
