<?php



function test($a, $b) {
	if (!is_numeric($a)) {
		echo "ERROR: {$a} should be a number" . PHP_EOL;

	} elseif (!is_numeric($b)) {
		echo "ERROR: {$b} should be a number" . PHP_EOL;

	} else {
		return true;
	}
	
}


function add($a, $b) {
	if (test($a, $b)) {
		echo $a + $b . PHP_EOL;
	}
}
function subtract($a, $b) {
	if(test($a, $b)){
		echo $a - $b . PHP_EOL;
	}
}

function multiply($a, $b) {
	if(test($a, $b)){
		echo $a * $b . PHP_EOL;
	}
}

function divide($a, $b) {
	if(test($a, $b)){
		if ($b !== 0) {
			echo $a / $b . PHP_EOL;
		} else {
			echo 'ERROR : division by zero' . PHP_EOL;
		}
	} 

}

function modulus($a, $b) {
	if(test($a, $b)){
		if ($b !== 0) {
			echo $a / $b . PHP_EOL;
		}
	} else {
		echo 'ERROR : division by zero' . PHP_EOL;
	}
}


add("a20",20);       //outputs 40
subtract(20,20);  //outputs 0
multiply("a20",20);  //outputs 400
divide(20,0);    //outputs 1
modulus(20,20)	  //outputs 1



//--------------------------------------------
// function compare($a, $b, $strict = true)      //defaults $strict to true
// {
// 	if ($strict === true){
// 		echo $a === $b ? 'true' : 'false';

// 	} else {
// 		echo $a == $b ?	'true' : 'false';

// 	}
// 	echo PHP_EOL;
// }

// compare(false, false);  //true
// compare(42, '42')       //false

//------------------------------------------

// function inspect($variable = null; $dump = true)
// {
// 	if ($dump === true) {
// 		var_dump($variable)
// 	}else {
// 		print_r($variable);
// 	}

// }

// inspect(['batman', 'superman', 'spiderman']);

// //------										//  these two are same result

// $heroes = ['batman', 'superman', 'spiderman']
// inspect($heroes)

// //-------------------------------------------

// function adder($a, $b) {
// 	if is_numeric($a) && is_numeric($b)
// 		echo $a + $b;
// }	else {
// 	echo ' both $a ans $b should be numbers';

// }
// 	echo PHP_EOL;
?>