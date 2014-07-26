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

//code starts here

//get input - 
echo "Dollar amount:\n";
$amount = get_input();
$final = $amount;
$quarter = floor($amount/.25);


$amount = ($amount - ($quarter*.25));



$dime = (floor($amount/.10));
$amount = ($amount - ($dime*.10));

$nickel = (floor($amount/.05));
$amount = ($amount - ($nickel*.05));

$penny = ($amount/.01);
$amount = ($amount - ($penny*.01));
PHP_EOL;
echo "Change to be made from " . $final . PHP_EOL;
echo "Quarters: " . $quarter . PHP_EOL;
echo "Dimes: " . $dime . PHP_EOL;
echo "Nickels: " . $nickel . PHP_EOL;
echo "Pennies: " . $penny . PHP_EOL;
