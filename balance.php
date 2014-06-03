<?php

//open file
function open_file($x_acct)
{ 
	$x_handle = fopen($x_acct, "r");
	$x_contents = fread($x_handle, filesize($x_acct));
	fclose($x_handle);
	return $x_contents;
}
//---------------------------------------
function save_file($x_filename, $x_contents)
{
    $x_handle = fopen($x_filename, "w");
    fwrite($x_handle, $x_contents);
    fclose($x_handle);
}
//-----------------------------------------
// Get STDIN, strip whitespace and newlines, 
// and convert to uppercase if $upper is true
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
//-------------------------------------
// do 
// { 	//gets acct #
	echo "Please enter acct number\n";
	$acct = get_input();	
		// opens file with inputed file #
	$transactions = open_file($acct . ".txt");
		//converts string to array
	$array = explode("\n", $transactions);
		//adds all items in file
	
do
{	
	$balance = array_sum($array);
	echo  "Your balance is $" . money_format('%i', $balance) . PHP_EOL;
	echo "(D)eposit , (W)ithdrawl, (S)ave, (Q)uit" . PHP_EOL;
	$input = get_input(true);
		
		switch ($input) 
		{
			case 'D':
				echo "enter deposit amount" . PHP_EOL;
				$deposit = get_input();
				array_push($array, $deposit);
				break;
			
			case 'W':
				echo "enter withdrawl amount" . PHP_EOL;
				$deposit = (-1 * abs(get_input()));


				// $num = -1 * abs($num)
				array_push($array, $deposit);
				break;
			
			case 'S':
				$filename = $acct . ".txt";
				$contents = implode("\n", $array);
				save_file($filename, $contents);
				echo "File saved" . PHP_EOL;


			default:
				# code...
				break;
		}

} while ($input != "Q");
echo "goodbye" . PHP_EOL;
