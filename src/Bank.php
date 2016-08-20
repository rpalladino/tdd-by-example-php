<?php

class Bank
{
	public function reduce(Expression $source, string $to): Money
	{
		$sum = $source;
		$amount = $sum->augend->amount + $sum->addend->amount;
		return new Money($amount, $to);
	}
}
