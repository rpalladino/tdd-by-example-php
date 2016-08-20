<?php

class Pair
{
	private $from;
	private $to;

	public function __construct(string $from, string $to)
	{
		$this->from = $from;
		$this->to = $to;
	}

	public function hashCode()
	{
		return (string) $this;
	}

	public function __toString()
	{
		return sprintf('%s:%s', $this->from, $this->to);
	}
}
