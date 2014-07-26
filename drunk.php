<?php


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

//code starts here


//get input - 
echo "Enter Your Weight:\n";
$weight = get_input(false);

echo "Enter your Sex: M/F\n";
$sex = get_input(true);

echo "Hours spent drinking:\n";
$hours = get_input(false);

echo "Bottles of Beers:\n";
$beer = get_input(false);

echo "Glasses of Wine:\n";
$wine = get_input(false);

echo "Shots of Tequila:\n";
$tequila = get_input(false);




if ($sex == 'M'){

	$r = .73;
}  else {
	$r = .66;
}

$alcohol = (($beer * .60) + ($wine * .65) + ($tequila * .70));

echo "total alcohol ounces ";
echo $alcohol . PHP_EOL;


$temp = (5.14/$weight);

$temp2 = ($alcohol * $temp * $r);
echo $r . PHP_EOL;
echo " A x 5/w x r - ";
echo $temp2 . PHP_EOL;

$bac = ($temp2 - (0.015 * $hours));

echo "BAC is ";
echo $bac . PHP_EOL;
