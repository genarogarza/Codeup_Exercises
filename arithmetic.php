<?php

function add($a, $b) {
    echo $a + $b . PHP_EOL;
}

function subtract($a, $b) {
    echo $a - $b . PHP_EOL;
}

function multiply($a, $b) {
    echo $a * $b . PHP_EOL;
}

function divide($a, $b) {
    echo $a / $b . PHP_EOL;
}

function modulus($a, $b) {
	echo $a % $b  . PHP_EOL;
}

add(20,20);       //outputs 40
subtract(20,20);  //outputs 0
multiply(20,20);  //outputs 400
divide(20,20);    //outputs 1
modulus(5,3)	  //outputs 2




?>