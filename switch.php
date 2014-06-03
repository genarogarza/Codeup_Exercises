<?php

// Set the default timezone
date_default_timezone_set('America/Chicago');

// Get Day of Week as number
// 1 (for Monday) through 7 (for Sunday)
$day_of_week = date('N');




// using SWITCH
switch($day_of_week) {
    case 1:
        // Output Monday
    	echo "today is Monday\n";
    	break;
    case 2:
        // Output Tuesday
    	echo "Today is Tuesday\n";
    	break;
    case 3:
        // Output Wednesday
    	echo "Today is Wednesday\n";
    	break;
	case 4:
	        // Output Thursday
	    echo "Today is Tuesday\n";
	    break;
	case 5:
	        // Output Friday
	    echo "Today is Friday\n";
	    break;
	case 6:
	        // Output Saturday
	    echo "Today is Saturday\n";
	    break;
	default:
	        // Output Sunday
	    echo "Today is Sunday\n";

}

// using IF
if ($day_of_week == 1) {
	echo "today is Monday\n";
} 	elseif ($day_of_week == 2) {
		echo "today is Tuesday\n";
}	elseif ($day_of_week == 3){
		echo "today is Wendesday\n";
}	elseif ($day_of_week == 3){
		echo "today is Thursday\n";
}	elseif ($day_of_week == 3){
		echo "today is Friday\n";
}	elseif ($day_of_week == 3){
		echo "today is Saturday\n";
}	elseif ($day_of_week == 3){
		echo "today is Sunday\n";
}




