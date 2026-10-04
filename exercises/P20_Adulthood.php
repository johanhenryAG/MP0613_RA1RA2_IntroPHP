<?php

class P20_Adulthood
{
    public function main(): void
    {
        // Write your code here
        // Prompt the user for input
       echo "How old are you?";
        // Get input from the user
        $input = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));
        // Check year value
        if ($input >= 18){
            echo "You are an adult\n";
        } else {
            echo "You are not an adult\n";
        }
       
    }
}
