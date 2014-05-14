<?php

$books = array(
    'The Hobbit' => array(
        'published' => 1937,
        'author' => 'J. R. R. Tolkien',
        'pages' => 310
    ),
    'Game of Thrones' => array(
        'published' => 1996,
        'author' => 'George R. R. Martin',
        'pages' => 835
    ),
    'The Catcher in the Rye' => array(
        'published' => 1951,
        'author' => 'J. D. Salinger',
        'pages' => 220
    ),
    'A Tale of Two Cities' => array(
        'published' => 1859,
        'author' => 'Charles Dickens',
        'pages' => 544
    )
);


// Exercise 2  my wrong way

// foreach ($books as $book){
// 	foreach($book as $key => $properties) {
// 		echo "$book $key is $properties\n";
// 	} 
// }

// Exervise 2 correct way

// foreach ($books as $book => $properties){
//     echo "$book" . PHP_EOL;
//     foreach($properties as $property => $value) {
//         echo "{$property}: {$value}\n";
//     } 
// }


//-----------------------------------------------
    
// exercise 3    my wrong way
// foreach ($books as $book){
// 	foreach($book as $key => $properties) {
// 		if ($book['published'] > 1950) {
// 			echo "Books $key is $properties\n";
// 		}
// 	} 
// }



// exercise 3 correct way
foreach ($books as $book => $properties){
    if ($properties['published'] > 1950) {
        echo "$book" . PHP_EOL;
        foreach ($properties as $property => $value) {
            echo "{$property}: {$value}\n";
        }
    }
} 
    


