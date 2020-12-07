<?php
//CalculatorTest.php
use \PHPUnit\Framework\TestCase;
require_once (__DIR__ . '/../lib/Calculator.php');

class CalculatorTest extends TestCase
{
	public function testAdd(): void
	{
		$calculator = new Calculator();
		self::assertEquals(4, $calculator->add(2, 2));

		self::assertEquals(10, $calculator->subtract(12, 2));

		self::assertEquals(30, $calculator->multiply(6, 5));

		self::assertEquals(8, $calculator->elevate(2, 3));

		self::assertEquals(10, $calculator->squareRoot( 100));

		self::assertEquals(1, $calculator->divide(2, 2));

		self::assertEquals(0, $calculator->divide(2, 0));

	}

}
