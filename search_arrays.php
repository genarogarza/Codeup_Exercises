<?php

// function find($array){
// 	foreach ($names as $name) {
// 		$result_array = array_search('Tina', $names);
// 		return $result_array;
// 	}
// }

function array_has_value($x_needle, $x_haystack) {
	$x_test = array_search($x_needle, $x_haystack);
	if ($x_test === false) {
		return false;
	} else {
		return true;
	}
}


function array_common_count($x_names, $x_compare)
{
	$x_count = 0;

	foreach ($x_names as $x_value) 
	{
		if (array_has_value($x_value, $x_compare))
		{
			$x_count++;

		} 
	}

	return $x_count;

}	
// function compare($x_needle, $x_haystack){
// 	return = ($result_array = array_intersect($x_needle, $x_haystack));


// }

//................................................s
// first names
$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

var_dump(array_common_count($names, $compare));
