<?php

function alphabet_soup($x_str){
	// convert input string to array with ' ' delimiter
$array = explode(" ", $x_str);

	//convert each array string to indiv array
	foreach ($array as $value) 
	{
		$sorted_array = str_split($value);
		sort($sorted_array);
		$sorted_string = implode("", $sorted_array) . " ";
		echo $sorted_string;
	}

echo PHP_EOL;
exit;



	//convert array to string
$sorted_string = implode($sorted_array);
return $sorted_string;



}

//--------------------------------------
function get_input($upper = FALSE) 
{
    // Return filtered STDIN input
    $result = trim(fgets(STDIN));
    
    if ($upper) 
    {
        return strtoupper($result);
    } 
      else 
      {
        return $result;
      }
}

//>>>>>>>>>CODE STARTS HERE<<<<<<<<<<<<<<<<

//get users input
echo "enter string to alphabetize: \n";
$str = get_input(false);

$answer = alphabet_soup($str);

echo $answer . PHP_EOL;


echo "string";

