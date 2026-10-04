<?php

class P24_OddOrEven
{
    public function main(): void
    {
        // Write your code here
        echo "Give a number: ";
        $num = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));
        
        if ($num % 2 == 0){
                echo "Number is even.\n";
            } else {
                echo "Number is odd.\n";
            }  
    }
}
