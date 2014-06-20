<?php

//open external file
function open_file($x_filename)
{
    $list_array = [];
    if (is_readable($x_filename) && filesize($x_filename) > 0) 
    {
        $x_handle = fopen($x_filename, "r");
        $contents = (fread($x_handle, filesize($x_filename)));
        $contents = trim($contents);
        fclose($x_handle);
        return $contents;
    }
}
//-----------------------------------------
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
//-----------------------------------------
function random($quantity) 
{
	$numbers = range(1, 6);
    $array = [];
    for ($i=0; $i < $quantity; $i++) 
    { 
    	shuffle($numbers);
    	$array[] = $numbers;
    	



    	
    }

    return ($array);


    //return array_slice($numbers, 0, $quantity);
// $generated


}

// >>>>>>>>>CODE STARTS HERE<<<<<<<<<<<<<<
//open words file
$filename = "diceware_wordlist.txt";
$contents = open_file($filename);

// converts file contents string to array
$array = explode("\n", $contents);

//converts 5 digit numbers to ass array keys 
$output = array();
foreach($array as $arr){
    $chunk = explode("\t", $arr);
    $output[$chunk[0]] = $chunk[1];
}




//get input - how many words to generate
echo "how many words do you want to use?\n";
$quantity = get_input(false);


$results = random($quantity);





print_r($results);
//print_r($output);






//create ass array with text file

