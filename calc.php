<?php
function Calc(){
	return fgets(STDIN);
}
$input = Calc();
do
{
	$input = $input + Calc();
	echo $input;
}
while ($input != 0);


