<?php

function assertEquals($dreamval, $result, $message){

	if($dreamval === $result){
		echo $message . ' - passed'.PHP_EOL.PHP_EOL;
	}
	else
	{
		echo $message . ' - failed'.PHP_EOL.PHP_EOL;
	}

}

function countMaxInt($value)
{
	if(empty($value))
	{
		echo 'Введите не больше 20 значений через пробел:'.PHP_EOL;
		$value = trim(fgets(STDIN));
	}

	$arr = explode(" ",$value);
	$len = count($arr);

	if($len > 20)
	{
		return null;
	}


	if(in_array("stop", $arr))
	{
		return 'stop';
	}

	$counter = 0;
	$max = max($arr);
	foreach ($arr as $k => $v){
		if(is_numeric($v) && is_numeric($max))
		{
			$v = $v + 0;
			$max = $max + 0;
			if(is_int($v) && is_int($max))
			{
				if($v === $max){$counter++;}
			}
			else
			{
				return null;
			}
		}
		else
		{
			return null;
		}
	}
	echo 'Результат:'.$counter.PHP_EOL;
	return $counter;
}

$result = countMaxInt('1 2 3 4 5 6 7 8 9 10 11 12 13 14 15 16 17 18 19 20 21');
assertEquals(null, $result, 'Результат: макс 20 чисел');

$result = countMaxInt('stop');
assertEquals('stop', $result, 'Результат: стоп');

$result = countMaxInt('20 20 ert 12');
assertEquals(null, $result, 'Результат: какая-то строка ');

$result = countMaxInt('1 3 3 1 0.5');
assertEquals(null, $result, 'Результат: не целое число');

$result = countMaxInt('1 3 3 1');
assertEquals(2, $result, 'Результат: 2');

//countMaxInt('');
