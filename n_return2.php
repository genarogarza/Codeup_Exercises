<?php

$items = ['TODO item 1', 'TODO item 2']
$key1 = $key + 1


function list_items($list)
{
    // Return string of list items separated by newlines.
    // Should be listed [KEY] Value like this:
    // [1] TODO item 1
    // [2] TODO item 2 - blah
    // DO NOT USE ECHO, USE RETURN

    //loop thru the list
    //foreach or for
    $return = " ";

    foreach($list as $key => $value) {
    	$result = $result . $key .PHP_EOL;
	}
    	return $result

    
}
echo list _items