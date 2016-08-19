<?php

class Money
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

	public function __construct(int $amount, string $currency)
    {
        $this->amount = $amount;
        $this->currency = $currency;
	}

    public function equals(Money $money)
    {
        return $this->amount === $money->amount
			&& static::class === get_class($money);
    }

	public function times(int $amount)
	{
		return null;
	}

	public function currency(): string
	{
		return $this->currency;
	}
}
