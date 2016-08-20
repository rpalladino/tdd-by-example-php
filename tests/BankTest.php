<?php

class BankTest extends PHPUnit_Framework_TestCase
{
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
