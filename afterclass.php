<?php

$cities = [
'san antonio' => ['population' => "50",
				 'area' => "20k", 
				 'climate' => "warm"],
'corpus'  =>     ['population' => "20",
				 'area' => "5k", 
				 'climate' => "humid"],
'laredo'  =>     ['population' => "11",
				 'area' => "7k", 
				 'climate' => "HOT"],
'siberia' =>	 ['population' => "50",
				 'area' => "12k", 
				 'climate' => "cold"],
'aspen'  =>		 ['population' => "11",
				 'area' => "2k", 
				 'climate' => "cold"],
];

//ex 4

foreach ($cities as $city => $inner) {
		echo ucwords($city) . ' population is ' . $inner['population'] . PHP_EOL;
		foreach ($inner as $att => $value) {
			// if ($value == "cold") {
				
			}
		
		}
			
	




// ex 3
// foreach ($cities as $city => $inner){
// 		foreach ($inner as $att => $data){
// 			if ($data == "warm") {
// 				echo "$city\n";
// 			}
// 		}
// }

// //1
// foreach ($cities as $city => $inner) {
// 	foreach ($inner as $att => $data) {
// 		echo $city . " " . $att .  ' ' . $data . PHP_EOL;
// 	}
// };

// //2
// foreach ($cities as $city => $inner) {
// 		echo PHP_EOL;
// 		echo "$city\n";
// 		echo "...............\n";
// 	foreach ($inner as $att => $data) {
// 		echo $att .  ' ' . $data . PHP_EOL;
// 	}
// };


