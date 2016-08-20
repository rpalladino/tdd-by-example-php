<?php

class Bank
{
	public function reduce(Expression $source, string $to): Money
	{
		if ($source instanceof Money) {
			return $source->reduce($to);
		}

		$sum = $source;
		return $sum->reduce($to);
	}
}
