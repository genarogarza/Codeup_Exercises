<?php


// homework 1 FOR
// $fruits = ['apple','orange','banana'];


// for ($i=0; $i < count($fruits); $i++) { 
    
// $fruit = $fruits[$i];
//     echo "$fruit\n";

// }

//-------------------------------------------
// homework 1 FOREACH

// $fruits = ['apple','orange','banana'];

// // $fruit = $fruits[$i];
// foreach ($fruits as $fruit) {
    
//     echo "$fruit\n";
// }

//------------------------------------------

// homework 2 my way

$fruits = [
    ['name' => 'apple','color' => 'red'],
    ['name' => 'orange','color' => 'orange'],
    ['name' => 'banana', 'color' => 'yellow']
];

foreach ($fruits as $fruit) { 
    echo $fruit['name'] . "s are " . $fruit['color'] . PHP_EOL;

}

//   teachers way

$fruits = [
    'apples' => 'red'.
    'oranges' => 'orange',
    'bananas' => 'yellow'
];

foreach ($$fruits as $fruit => $color) {
    echo "{$fruits are {$color}\n";
}

