<?php
// List of famous peeps
$physicists_string = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

//===============================================

//convert string to array
$physicists_array = explode(", ", $physicists_string);

//pop and save to var
$lastitem = array_pop($physicists_array);

//then push 'add'
array_push($physicists_array, "and");

//then add popped item back
array_push($physicists_array, $lastitem);

echo "Some of the most famous fictional theoretical physicists are ";

//option 2
$newString = implode(", ", $physicists_array);
echo $newString;
echo PHP_EOL;
