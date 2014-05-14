<?php




for ($x = 1;$x<=100;$x++){

// checks for div by 3 and 5
if ((($x % 3) == 0) && (($x % 5) == 0)) {
	echo "FixxBuzz\n";
// checks for div by 3	
}	elseif (($x % 3) == 0){
	echo "FIZZ\n";
// checks for div by 5
}	elseif(($x % 5) == 0) {
	echo "BUZZ\n";
	
}  else echo "{$x}\n";

}

	

// checks for div by 3 FIZZ
//	else echo "{$x}\n";
// checks for div by 5 Buzz
//	else echo $x;
	






