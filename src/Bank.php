<?php

class Bank
{
	public function reduce(Expression $source, string $to): Money
	{
		return $source->reduce($this, $to);
	}
}
