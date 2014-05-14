<?php

$array = ['a', 'b', 'c'];

foreach ($array as $value) {

	echo $value . PHP_EOL;
	for ($i=0; $i <= 10 ; $i++) { 
		echo "$i" . PHP_EOL;
	}
}