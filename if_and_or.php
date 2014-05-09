<?php
$x = 0;
$y = 5;
$z = 10;

// if $x < $y < $z then echo "{$x} < {$y} < {$z}\n";

if($x < $y && $y < $z)
{
	echo "{$x} < {$y} < {$z}\n";
}




// if $x is greater than 0 OR less than 10, echo the result as a sentence "$x is greater than 0 OR less than 10".

if( $x > 0 || $x < 10) 
{
	echo "line 19 $x is greater than 0 OR less than 10\n";
}

// repeat the if statement for $y and $z.


if( $y > 0 || $y < 10)
{
	echo "line 27 $y is greater than 0 OR less than 10\n";
}


if( $z > 0 || $z < 10)
{
	echo "line 33 $z is greater than 0 OR less than 10\n";
}





// If $x is greater than 0 AND less than 10, echo the result as a sentence "$x is greater than 0 AND less than 10".

// repeat the if statement for $y and $z.


if($x > 0 && $x< 10)
{ 
	echo "__LINE__ $x is greater than 0 AND less than 10\n";
}

if($y > 0 && $y< 10)
{ 
	echo "line 52 $y is greater than 0 AND less than 10\n";
}

if($z > 0 && $z< 10)
{ 
	echo "line 57 $z is greater than 0 AND less than 10\n";
}

















?>