<?php

class MoneyTest extends PHPUnit_Framework_TestCase
{
	public function testEquality()
	{
		$this->assertNotEquals(Money::franc(5), Money::dollar(5));
		$this->assertFalse((Money::franc(5))->equals(Money::dollar(5)));
	}

	public function testDifferentClassEquality()
	{
		$this->assertTrue((new Money(10, "CHF"))->equals(new Franc(10, "CHF")));
	}

	public function testCurrency()
	{
		$this->assertEquals("USD", Money::dollar(1)->currency());
		$this->assertEquals("CHF", Money::franc(1)->currency());
	}
}
