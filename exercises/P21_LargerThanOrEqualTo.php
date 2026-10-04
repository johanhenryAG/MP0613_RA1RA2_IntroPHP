<?php

class P21_LargerThanOrEqualTo
{
    public function main(): void
    {
        // Write your code here
        // Prompt the user for input
        echo "Give the first number:";
        // Get input from the user
        $fn = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));
        // Prompt the user for input
        echo "Give the second number:";
        // Get input from the user
        $sn = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));
        // Check year value
        if ($fn > $sn){
            echo "Greater number is: " . $fn . "\n";
        } elseif ($sn > $fn){
            echo "Greater number is: " . $sn . "\n";
        } else {
            echo "The numbers are equal!\n";
        }

    }
}
