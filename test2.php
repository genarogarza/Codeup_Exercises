<?php

$string = '1-350,9-390.99';
$array = explode(',', $string);

var_dump($array);




$output = array();

foreach($array as $arr){
    $chunk = explode('-', $arr);
    $output[$chunk[0]] = $chunk[1];
}
print_r($output);

