<?php

// not visible inside function
$me - 'jason;'


function adder($number_1, $number_2)
{
	//echo will not see $me since it is outside of function
	// echo $me;
	

	echo $number_1 + $number_2 . PHP_EOL;
}

adder(1,2);

	//echo cant see var inside of function
	// echo $number_1



