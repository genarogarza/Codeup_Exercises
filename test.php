<?php

$books = array(
    array(
    	'name' => 'Virginia Potts', 
    	'age' => 29),
    array('name' => 
    	'Elon Musk', 
    	'age' => 42),
    array(
    	'name' => 
    	'Rasmus Lerdorf', 
    	'age' => 45),
    array('name' => 
    	'Marissa Mayer', 
    	'age' => 38)
);

foreach ($books as $book) {
    foreach ($book as $key => $value) {
        echo "Book's $key is $value\n";
    }
}