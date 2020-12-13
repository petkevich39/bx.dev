<?php
//CalculatorTest.php
use \PHPUnit\Framework\TestCase;
require_once (__DIR__ . '/../lib/DecoratorTask.php');

class DecoratorTaskTest extends TestCase
{
	/** @test */
	public function drawBlueCircle(): void
	{
		$redShape = new Circle();
		$redShape = new BlueColor($redShape);
		$res = $redShape->draw();
		self::assertEquals('Blue colored Shape Circle', $res);
	}

	/** @test */
	public function drawBlueSquare(): void
	{
		$redShape = new Square();
		$redShape = new BlueColor($redShape);
		$res = $redShape->draw();
		self::assertEquals('Blue colored Shape Square', $res);
	}

	/** @test */
	public function drawRedCircle(): void
	{
		$redShape = new Circle();
		$redShape = new RedColor($redShape);
		$res = $redShape->draw();
		self::assertEquals('Red colored Shape Circle', $res);
	}

	/** @test */
	public function drawRedSquare(): void
	{
		$redShape = new Square();
		$redShape = new RedColor($redShape);
		$res = $redShape->draw();
		self::assertEquals('Red colored Shape Square', $res);
	}

}
