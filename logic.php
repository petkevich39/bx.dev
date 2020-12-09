<?php

class QueensMove
{
	private $fromX, $fromY, $toX, $toY;

	public function __construct($move = "")
	{
		if ($move === "")
		{
			echo 'Привет!Ходите, через запятую 2 цифры от 1-8 для начальной позиции!'.PHP_EOL;
			$from = trim(fgets(STDIN));
			$arr = explode(",", $from);
			echo 'Привет!Ходите, через запятую 2 цифры от 1-8 для конечной позиции!'.PHP_EOL;
			$to = trim(fgets(STDIN));//получаем ход
			$arr[] = explode(",", $to);
		} else {
			$arr = explode(",", $move);
		}

		$this->fromX = (int)$arr[0];
		$this->fromY = (int)$arr[1];
		$this->toX = (int)$arr[2];
		$this->toY = (int)$arr[3];                     //задаем строку и столбец для клеток
	}

	public function getDirection()                    // Узнаем продвинемся или нет
	{
		if ($this->fromX === $this->toX)
		{
			echo PHP_EOL.'ДА!';
			return true;
		}
		elseif ($this->fromY === $this->toY)
		{
			echo PHP_EOL.'ДА!';
			return true;
		}
		elseif ($this->fromY - $this->fromX === $this->toY - $this->toX)
		{
			echo PHP_EOL.'ДА!';
			return true;
		}
		else
		{
			echo PHP_EOL.'НЕТ!';
			return false;
		}
	}

}

function assertEquals($dreamval, $result, $message)
{

	if ($dreamval === $result)
	{
		echo $message.' - passed';
	}
	else
	{
		echo $message.' - failed';
	}

}

//$steep = new QueensMove("");
//$steep->getDirection();

$steep = new QueensMove("1,1,2,5");
$result = $steep->getDirection();
assertEquals(false, $result, '');

$steep = new QueensMove("1,1,1,5");
$result = $steep->getDirection();
assertEquals(true, $result, '');

$steep = new QueensMove("1,1,5,1");
$result = $steep->getDirection();
assertEquals(true, $result, '');

$steep = new QueensMove("1,1,8,8");
$result = $steep->getDirection();
assertEquals(true, $result, '');
