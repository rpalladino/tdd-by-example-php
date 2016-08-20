<?php

class Money implements Expression
{
	public $amount;
	protected $currency;

	public static function dollar(int $amount): Money
	{
		return new Money($amount, "USD");
	}

	public static function franc(int $amount): Money
	{
		return new Money($amount, "CHF");
	}

	public function __construct(int $amount, string $currency)
    {
        $this->amount = $amount;
        $this->currency = $currency;
	}

    public function equals(Money $money)
    {
        return $this->amount === $money->amount
			&& $this->currency() === $money->currency();
    }

	public function times(int $multiplier): Money
    {
        return new Money($this->amount * $multiplier, $this->currency);
    }

	public function currency(): string
	{
		return $this->currency;
	}

	public function plus(Money $addend): Expression
	{
		return new Sum($this, $addend);
	}

	public function reduce(string $to): Money
	{
		return $this;
	}
}
