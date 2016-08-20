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
		if ($from === $to) {
			return 1;
		}

		$rate = $this->rates[(new Pair($from, $to))->hashCode()];
		return $rate;
	}

	public function addRate(string $from, string $to, int $rate)
	{
		$this->rates[(new Pair($from, $to))->hashCode()] = $rate;
	}
}
