<?php

class Money
{
	protected $amount;

	public static function dollar(int $amount)
	{
		return new Dollar($amount);
	}

    public function equals(Money $money)
    {
        return $this->amount === $money->amount
			&& static::class === get_class($money);
    }
}
