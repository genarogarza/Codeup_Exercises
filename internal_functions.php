<?php

$nothing = NULL;
$something = '';
$array = array(1,2,3);

// Create a function that checks if a variable is set or empty, and display "$variable_name is SET|EMPTY"


function test($x){
	if (isset($x)) {
			echo "variable is SET\n";
	}	elseif (empty($x)) {
			echo "variable is EMPTY\n";
	} 	
}

// TEST: If var $nothing is set, display '$nothing is SET'
// TEST: If var $nothing is empty, display '$nothing is EMPTY'

echo test($nothing);

// TEST: If var $something is set, display '$something is SET'
echo test($something);

// Serialize the array $array, and output the results
$serial = serialize($array);
echo $serial . PHP_EOL;
// Unserialize the array $array, and output the results

$unserial = unserialize($serial);
var_dump($unserial) . PHP_EOL;

?>