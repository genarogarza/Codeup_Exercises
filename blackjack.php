<?php

$hand = array('A-H', '5-D', 'K-C', 'A-S', '4-H');




function getTotal($hand)
{
    $total = 0; //total of your card hand

    // loop through hand and calculate total value
    // use "explode" function to separate card suit and value
    // aces count as 11 unless you are over 21 and then they count as 1
    // K, Q, and J count as 10
    // numeric cards count as their value

    foreach ($hand as $card) 
    {  
        
        (explode('-', $card));

        if  ($card[0] == "A" && $total < 21)
        {
            $value = 1;
        } else 
        {
            $value = 11;
        } 
        
        if ($card[0] = "K" || $card[0] = "Q" || $card[0] = "J" ) 
        {
            $value = 10;
        } else 

        {
            $value = $card[0];
        }

    }
    
    return $getTotal;
}

echo getTotal($hand) . PHP_EOL;









