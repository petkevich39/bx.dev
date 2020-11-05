<?php
function Init()
{
	echo 'Введите число:';
	$input = GetNumb();
	Calc($input);
}
function Calc($input)
{
	do
	{
		echo 'Введите ещё одно число:';
		$numb = GetNumb();
		$input = $input + $numb;
		echo 'Сумма чисел равна: '.$input, PHP_EOL;
		echo 'Желаете продолжить?(Y/n)', PHP_EOL;
		$contin = trim(fgets(STDIN));
		if ($contin != 'Y')
		{
			echo 'Желаете начать заново?(Y/n)', PHP_EOL;
			$contin = trim(fgets(STDIN));
			if ($contin != 'Y')
			{
				break;
			} else {
				Init();
			}
		}
	}
	while ($input != 0);
}
function GetNumb(){
	$numb = trim(fgets(STDIN));
	if(!empty($numb) && is_numeric($numb)){
		return $numb;
	} else {
		echo 'Это было не число! >.<',PHP_EOL;
		echo 'Попробуйте снова!',PHP_EOL;
		return GetNumb();
	}
}
Init();
