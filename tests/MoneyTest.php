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

	public function testPlusReturnsSum()
	{
		$five = Money::dollar(5);
		$sum = $five->plus($five);
		$this->assertEquals($five, $sum->augend);
		$this->assertEquals($five, $sum->addend);
	}

	public function testReduceSum()
	{
		$sum = new Sum(Money::dollar(3), Money::dollar(4));
		$bank = new Bank();
		$result = $bank->reduce($sum, "USD");
		$this->assertEquals(Money::dollar(7), $result);
	}

	public function testReduceMoney()
	{
		$bank = new Bank();
		$result = $bank->reduce(Money::dollar(1), "USD");
		$this->assertEquals(Money::dollar(1), $result);
	}

	public function testReduceMoneyDifferentCurrencies()
	{
		$bank = new Bank();
		$bank->addRate("CHF", "USD", 2);
		$result = $bank->reduce(Money::franc(2), "USD");
		$this->assertEquals(Money::dollar(1), $result);
	}

	public function testIdentityRate()
	{
		$this->assertEquals(1, (new Bank)->rate("USD", "USD"));
	}
}
