<?php

// Converts string into array 
function humanized_list($string) {
  		$physicists_array = explode(", ", $string);

  		//sort naturally
		sort($physicists_array);

		//pop and save to var
		$lastitem = array_pop($physicists_array);

		//then push 'add'
		array_push($physicists_array, "and ");

		//then add popped item back
		array_push($physicists_array, $lastitem);

		//return value
		return $physicists_array;
}

// List of famous peeps
$physicists_string = "Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark";

// Humanize that list
$famous_fake_physicists = humanized_list($physicists_string);

//sorts alphabetically

$physicists_string = implode(", ", $famous_fake_physicists);


// Output sentence
echo "Some of the most famous fictional theoretical physicists are $physicists_string. " . PHP_EOL;

?>