<?php

$a = 5;
$b = 10;
$c = '10';

if ($a < $b) {
    // output the appropriate result
    echo "line 9 $a is less than $b\n";
}

if ($b > $a) {
    // output the appropriate result
    echo "line 14 $b is greater than $a\n";
}

if ($b >= $c) {
    // output the appropriate result
    echo "line 19 $b is greater than or equal to $c\n";
}

if ($b <= $c) {
    // output the appropriate result
    echo "line 24 $b is less than or equal to $c\n";
}

if ($b == $c) {
    // output the appropriate result
    echo "line 29 $b is same value as $c\n";
}

if ($b === $c) {
    // output the appropriate result
    echo " line 34 $b is same value and type as $c\n";
}

// output the appropriate result
if ($b != $c) {
    echo "line 39 $b is not equal to $c\n";
}

// output the appropriate result
if ($b !== $c) {
    echo "line 44 $b is not identical to $c\n";
}

?>