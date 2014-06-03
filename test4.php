<?php

$x = [1,2,3,4];
$y = [6,7,8,9];

$z = [];
$z[0] = $y[0];
$z[1] = $y[1];
$z[2] = $y[2];
$z[3] = $y[3];
echo "Z" . PHP_EOL;
print_r($z);

$x = array_push($x, $y);
print_r($x);

// $a = array(1,2,3,4);
// $b = array(5,6,7,8);
// $c = array(1,2,3,4);

// $out = array_merge($a, $b, $c);

// print_r($out);