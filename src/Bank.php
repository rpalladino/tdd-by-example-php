<?php

class Bank
{
	private $rates = [];

	public function reduce(Expression $source, string $to): Money
	{
		return $source->reduce($this, $to);
	}

	public function rate(string $from, string $to): int
	{
		return ($from === "CHF" && $to === "USD") ? 2 : 1;
	}

	public function addRate(string $from, string $to, int $rate)
	{
		$this->rates[(new Pair($from, $to))->hashCode()] = $rate;
	}
}
