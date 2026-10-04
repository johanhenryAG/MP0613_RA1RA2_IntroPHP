<?php

class P37_AverageOfNumbers
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

        if ($count > 0) {
            $average = $sum / $count;
            echo "Average of the numbers: " . $average . "\n";
        } else {
            echo "Average of the numbers: 0\n";
        }
    }
}
