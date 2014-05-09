<?php

$a = 5;
$b = 10;
$c = '10';

// Add an ELSE clause to the next 2 statements into an if/else
if ($a < $b) 
{
    // output the appropriate result
    echo "line " .__LINE__ . "> $a is less than $b\n";
}
else 

    // output the appropriate result
if ($b >$a)
{
    echo "line " .__LINE__ . "> $b is greater than $a\n";
}


//-------------------------------------------------
// Shorten the next 2 statements into an if/else
if ($b >= $c) 
{
    // output the appropriate result
    echo "line " .__LINE__ . "> $b is >= $c\n";
}

if ($b <= $c) 
{

    // output the appropriate result
    echo "line " .__LINE__ . "> $b is <= $c\n";
}


//-----------------------------------------------




// combine the next 4 conditionals into 
// one if/else/elseif block that checks in order for:
// identical, equal, not identical, not equal
if ($b == $c) 
{
    // output the appropriate result
    echo "line " .__LINE__ . "> $b is equal to $c\n";
} 
elseif ($b === $c) 
{
    // output the appropriate result
    echo "line " .__LINE__ . "> $b is identical to $c\n";
}

elseif ($b != $c) 
{
    // output the appropriate result
    echo "line " .__LINE__ . "> $b is not equal to $c\n";
} 

elseif ($b !== $c) 
{
    // output the appropriate result
    echo "line " .__LINE__ . "> $b is not identical to $c\n";
}
