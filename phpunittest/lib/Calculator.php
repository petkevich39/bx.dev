<?php
//Calculator.php

class Calculator
{
	public function add(int $a, int $b): int
	{
		return $a + $b;
	}

	public function subtract(int $a, int $b): int
	{
		return $a - $b;
	}

	public function multiply(int $a, int $b): int
	{
		return $a * $b;
	}

	public function divide(int $a, int $b): float
	{
		if($b === 0)
		{
			throw new InvalidArgumentException('Divider cant be a zero');
		}
		return $a / $b;
	}

	public function elevate(int $a, int $b): float
	{
		return pow($a, $b);
	}

	public function squareRoot(int $a): float
	{
		if($a < 0)
		{
			throw new InvalidArgumentException('The number cannot be less than zero');
		}
		return sqrt($a);
	}
}