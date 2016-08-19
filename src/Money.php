<?php

class Money
{
	protected $amount;

    public function equals(Money $money)
    {
        return $this->amount === $money->amount
			&& static::class === get_class($money);
    }
}
