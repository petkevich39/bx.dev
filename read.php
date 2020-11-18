<?php

function readFromConsole($message, $value)
{
	if(empty($message) && empty($value))
	{
		echo 'Введите сообщение:'.PHP_EOL;
		$message = trim(fgets(STDIN));
		echo 'Введите значение:'.PHP_EOL;
		$value = trim(fgets(STDIN));
	}

	switch ($value)
	{
		case is_numeric($value):
			echo $message . 'Результат: '.$value.PHP_EOL;
			return $value + 0;
		case is_string($value):
			if($value == '!stop')
			{
				echo $message . 'Результат: null'.PHP_EOL;
				return null;
			}
			elseif($value == 'false')
			{
				echo $message . 'Результат: false'.PHP_EOL;
				return false;
			}
			elseif($value == 'true')
			{
				echo $message . 'Результат: true'.PHP_EOL;
				return true;
			}
			else {
				echo $message . 'Результат: '.$value.PHP_EOL;
				return (string)$value;
			}
		default:
			return $value;
	}
}

