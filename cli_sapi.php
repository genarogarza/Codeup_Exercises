<?php


// gets number to guess

$x = rand(0,100);
echo $x;


// evaluates users guess
fwrite(STDOUT, 'guess a num ber betwen 0 and 100');
$guess = fgets(STDIN);



// echo if wrong

if ($guess == $x){
	echo "Correctamundo !!"
}
	else "try again sucka"

// final output