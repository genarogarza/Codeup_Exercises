<?php
/// using arguments

// error if not at least two arguments
if ($argc < 3) {
	echo " please run cmd again and enter NUMERIC min and max value and incrementer after filename\n";
	echo " example: php for.php 0 100 10\n";
	exit(1);
}
// incrmentor entered??
// user selected increment
// Default increment to 0 if no input
if ($argc < 3){
	$increment = '1';
}  else {
	$increment = $argv[2];
}

// non numeric test
if (!(is_numeric($argv[1]))) {
	echo " {$argv[1]} is not numeric\n";
	exit(1);
} elseif (!(is_numeric($argv[2]))) {
	echo " {$argv[2]} is not numeric\n";
	exit(1);
} elseif (!(is_numeric($argv[3]))) {
	echo " {$argv[3]} is not numeric\n";
	exit(1);
}

// operation
for($x = $argv[1];$x <= $argv[2]; $x = ($x += $increment)) {

	echo "{$x}\n";
}



///  using fwrite/fgets


