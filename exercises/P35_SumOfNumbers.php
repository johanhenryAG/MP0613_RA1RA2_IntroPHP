<?php

class P35_SumOfNumbers
{
    public function main(): void
    {
        // Write your code here
       $sum = 0;

        echo "Give a number: ";
        $num = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));

        while ($num !== 0) {
            $sum += $num;

            echo "Give a number: ";
            $num = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));
        }

        echo "Sum of the numbers: " . $sum . "\n";
    }
}
