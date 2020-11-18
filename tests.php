<?php
require_once ('read.php');

function assertEquals($dreamval, $result, $message){
	if($dreamval === $result){
		echo $message . ' - passed'.PHP_EOL.PHP_EOL;
	}
	else
	{
		echo $message . ' - failed'.PHP_EOL.PHP_EOL;
	}

}

//readFromConsole('', '');

$result = readFromConsole('', '!stop');
assertEquals(null, $result, 'Test: !stop = null');

$result = readFromConsole('', 'true');
assertEquals(true, $result, 'Test: true = true');

$result = readFromConsole('', 'false');
assertEquals(false, $result, 'Test: false = false');

$result = readFromConsole('', '1.3');
assertEquals(1.3, $result, 'Test: 1.3 = 1.3');

$result = readFromConsole('', '1');
assertEquals(1, $result, 'Test: 1 = 1');

$result = readFromConsole('', 'test');
assertEquals('test', $result, 'Test: test = test');

// * readFromConsole('', 'true') - true;
// * readFromConsole('', 'false') - false;
// * readFromConsole('', '!stop') - null;
// * readFromConsole('', '1.3') - 1.3;
// * readFromConsole('', '1') - 1;
// * readFromConsole('', 'test') = 'test;