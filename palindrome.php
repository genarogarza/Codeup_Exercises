<?php 

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

function is_palindrome($test)
{
	$whatToStrip = array("?","!",",",";","'",":"," ");

	$stripped = str_replace($whatToStrip, "", $test);

	$stripped_rev = strrev($stripped);

	echo $stripped_rev . PHP_EOL;
	//var_dump($stripped);
	echo $stripped . PHP_EOL;
	//var_dump($stripped_rev);



	if ($stripped == $stripped_rev) 
	{
		return true;
	} else {
		return false;
	}
		
}


// >>>>CODE STARTS HERE<<<<<<<<<<<<<<<<<

echo "Enter text to evaluate\n";
//$text = get_input();
$answer = is_palindrome(get_input(true));
//var_dump($answer);


	if ($answer == true){
		echo "this is a Palindrome\n";
	} else {
		echo " sorry not a Palindrome\n";
	}

