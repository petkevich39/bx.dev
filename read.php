<?php

function readFromConsole($msg, $value)
{
	if(empty($msg) && empty($value))
	{
		echo 'Введите сообщение:'.PHP_EOL;
		$msg = trim(fgets(STDIN));
		echo 'Введите значение:'.PHP_EOL;
		$value = trim(fgets(STDIN));
	}

	switch ($value)
	{
		case is_numeric($value):
			echo $msg . 'Результат: '.$value.PHP_EOL;
			return $value + 0;
		case is_string($value):
			if($value == '!stop')
			{
				echo $msg . 'Результат: null'.PHP_EOL;
				return null;
			}
			elseif($value == 'false')
			{
				echo $msg . 'Результат: false'.PHP_EOL;
				return false;
			}
			elseif($value == 'true')
			{
				echo $msg . 'Результат: true'.PHP_EOL;
				return true;
			}
			else {
				echo $msg . 'Результат: '.$value.PHP_EOL;
				return (string)$value;
			}
		default:
			return $value;
	}
}

