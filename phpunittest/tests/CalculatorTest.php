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
		self::assertEquals(5, $calculator->add(5, 0));
		self::assertEquals(-2, $calculator->add(-1, -1));
	}

	public function testSubtract(): void
	{
		$calculator = new Calculator();
		self::assertEquals(10, $calculator->subtract(12, 2));
		self::assertEquals(0, $calculator->subtract(12, 12));
		self::assertEquals(-1, $calculator->subtract(12, 13));
	}

	public function testMultiply(): void
	{
		$calculator = new Calculator();
		self::assertEquals(30, $calculator->multiply(6, 5));
		self::assertEquals(-2, $calculator->multiply(1, -2));
		self::assertEquals(0, $calculator->multiply(1, 0));
	}

	public function testDivide(): void
	{
		$calculator = new Calculator();
		self::assertEquals(1, $calculator->divide(2, 2));
		self::assertEquals(0.5, $calculator->divide(1, 2));
	}

	public function testElevate(): void
	{
		$calculator = new Calculator();
		self::assertEquals(8, $calculator->elevate(2, 3));
		self::assertEquals(0.1, $calculator->elevate(10, -1));
		self::assertEquals(1, $calculator->elevate(2, 0));
	}

	public function testSquareRoot(): void
	{
		$calculator = new Calculator();
		self::assertEquals(2.2360679774998, $calculator->squareRoot( 5));
		self::assertEquals(10, $calculator->squareRoot( 100));
		self::assertEquals(0, $calculator->squareRoot( 0));
	}

	public function testExceptionDivide(): void
	{
		$calculator = new Calculator();
		$this->expectException(InvalidArgumentException::class);
		$this->expectExceptionMessage('Divider cant be a zero');
		$calculator->divide(5, 0);
	}

	public function testExceptionSquareRoot(): void
	{
		$this->expectException(InvalidArgumentException::class);
		$this->expectExceptionMessage('The number cannot be less than zero');
		$calculator = new Calculator();
		$calculator->squareRoot(-25);
	}
}
