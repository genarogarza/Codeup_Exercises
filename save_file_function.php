<?php

function save_file($x_filename, $x_contents)
{
    $handle = fopen($x_filename, "w");
    fwrite($handle, $contents);
    fclose($handle);
}

function get_input($upper = FALSE) 
{
    // Return filtered STDIN input
    $result = trim(fgets(STDIN));
    
    if ($upper) 
    {
        return strtoupper($result);
    } 

      else 

      {
        return $result;
      }
}
