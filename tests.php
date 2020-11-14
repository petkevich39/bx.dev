<?php
require_once ('read.php');

function assertEquals($dreamval, $result, $msg){
	if($dreamval === $result){
		echo $msg . ' - passed';
	}
	else
	{
		echo $msg . ' - failed';
	}

}

//readFromConsole('', '');

$result = readFromConsole('', '!stop');
assertEquals(null, $result, 'Test: !stop = null');

// * readFromConsole('', 'true') - true;
// * readFromConsole('', 'false') - false;
// * readFromConsole('', '!stop') - null;
// * readFromConsole('', '1.3') - 1.3;
// * readFromConsole('', '1') - 1;
// * readFromConsole('', 'test') = 'test;