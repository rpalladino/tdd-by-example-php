<?php

class MoneyTest extends PHPUnit_Framework_TestCase
{
	public function testEquality()
	{
		$this->assertNotEquals(new Franc(5), new Dollar(5));
		$this->assertFalse((new Franc(5))->equals(new Dollar(5)));
	}
}
