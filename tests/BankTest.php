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
}
