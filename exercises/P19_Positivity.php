<?php

class P19_Positivity
{
    public function main(): void
    {
        // Write your code here
        // Prompt the user for input
       echo "Give a number: ";
        // Get input from the user
        $input = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));
        // Check year value
       if ($input > 0){
        echo "The number is positive.\n";
       } else {
        echo "The number is not positive.\n";
       }
    }
}
