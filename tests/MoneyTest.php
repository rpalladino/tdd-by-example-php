<?php

class MoneyTest extends PHPUnit_Framework_TestCase
{
	public function testMultiplication()
	{
		$five = Money::dollar(5);
		$this->assertEquals(Money::dollar(10), $five->times(2));
		$this->assertEquals(Money::dollar(15), $five->times(3));
	}

	public function testEquality()
	{
		$this->assertEquals(Money::dollar(5), Money::dollar(5));
		$this->assertNotEquals(Money::dollar(5), Money::dollar(6));
		$this->assertNotEquals(Money::franc(5), Money::dollar(5));
	}

	public function testCurrency()
	{
		$this->assertEquals("USD", Money::dollar(1)->currency());
		$this->assertEquals("CHF", Money::franc(1)->currency());
	}

	public function testSimpleAddition()
	{
		$five = Money::dollar(5);
		$sum = $five->plus($five);
		$bank = new Bank();
		$reduced = $bank->reduce($sum, "USD");
		$this->assertEquals(Money::dollar(10), $reduced);
	}
}
