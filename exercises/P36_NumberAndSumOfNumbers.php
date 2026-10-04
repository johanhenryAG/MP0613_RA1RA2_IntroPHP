<?php

class P36_NumberAndSumOfNumbers
{
    public function main(): void
    {
        // Write your code here
        $count = 0;
        $sum = 0;

        echo "Give a number: ";
        $num = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));

        while ($num !== 0) {
            $count++;
            $sum += $num;

            echo "Give a number: ";
            $num = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));
        }

        echo "Number of numbers: " . $count . "\n";
        echo "Sum of the numbers: " . $sum . "\n";
    }
}
