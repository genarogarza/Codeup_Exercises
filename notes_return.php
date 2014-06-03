<?php

function add($a, $b) {

	if (is_numeric($a) && is_numeric($b)) {
		return $a + $b;
	} else {
		return " Error! \$a and/or \$b was not a number";
	}
}

$c = 5;
$d = 2.5;
$e = 4.6;
$f = pi();

$result = add('15' , $e);
var_dump($result);

$result2 = add(5, 6);
var_dump($result2);
echo add($result, $result2) . PHP_EOL;




