<?php

class QueensMove
{
	private $fromX, $fromY, $toX, $toY;

	public function __construct($move = "")
	{
		if ($move === "")
		{
			echo 'Привет!Ходите, через запятую 4 цифры от 1-8!'.PHP_EOL;
			$move = trim(fgets(STDIN));        //получаем ход
		}
		$arr = explode(",", $move);

		$this->fromX = (int)$arr[0];
		$this->fromY = (int)$arr[1];
		$this->toX = (int)$arr[2];
		$this->toY = (int)$arr[3];                     //задаем строку и столбец для клеток
	}

	public function getDirection()                    // Узнаем продвинемся или нет
	{
		if ($this->fromX === $this->toX)
		{
			echo 'Да!'.PHP_EOL; //vertic

			return 'vertic';
		}
		elseif ($this->fromY === $this->toY)
		{
			echo 'Да!'.PHP_EOL; //horiz

			return 'horiz';
		}
		elseif ($this->fromY - $this->fromX === $this->toY - $this->toX)
		{
			echo 'Да!'.PHP_EOL; //diag

			return 'diag';
		}
		else
		{
			echo 'Нет!'.PHP_EOL;

			return false;
		}
	}

}

function assertEquals($dreamval, $result, $message)
{

	if ($dreamval === $result)
	{
		echo $message.' - passed'.PHP_EOL.PHP_EOL;
	}
	else
	{
		echo $message.' - failed'.PHP_EOL.PHP_EOL;
	}

}

//$steep = new QueensMove("");
//$steep->getDirection();

$steep = new QueensMove("1,1,2,5");
$result = $steep->getDirection();
assertEquals(false, $result, 'Результат: неправильный ход!');

$steep = new QueensMove("1,1,1,5");
$result = $steep->getDirection();
assertEquals('vertic', $result, 'Результат: вертикальный ход!');

$steep = new QueensMove("1,1,5,1");
$result = $steep->getDirection();
assertEquals('horiz', $result, 'Результат: горизонтальный ход!');

$steep = new QueensMove("1,1,8,8");
$result = $steep->getDirection();
assertEquals('diag', $result, 'Результат: диагональный ход!');
