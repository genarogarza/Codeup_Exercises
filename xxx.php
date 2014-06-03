<?php

$whatToStrip = array("?","!",",",";","'",":");
$test = "a'more roma";
echo $test."\n\n";
echo str_replace($whatToStrip, "", $test). PHP_EOL;

// $whatToStrip = array("?","!",",",";",":");
// $x_text = "a'more roma";
// $x_stripped = str_replace($whatToStrip, "", $x_text);
// echo $x_stripped . PHP_EOL;