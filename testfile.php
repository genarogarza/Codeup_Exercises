<?php

// $items = [
// 	['n0','a','texas'],
// 	['n1','a','colorado'],
// 	['n2','a','colorado'],
// 	['n3','a','texas']
// ];

// foreach ($items as $item) {
// 	if ($item[2] == "texas") {
// 		echo $item[0] . " is from "  . $item[2] . PHP_EOL;
// 	}
// }

$companies = [
    'ford' => ['f150', 'taurus', 'cv'],
    'toyota' => ['corolla', 'camry', 'supra']
];


foreach($companies as $key => $values) {
    if ($key == 'toyota' && $values[1] == 'camry'){
        echo $key . " ". $values[1] . PHP_EOL;
    }
}
 