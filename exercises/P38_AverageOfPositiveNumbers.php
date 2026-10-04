<?php

class P38_AverageOfPositiveNumbers
{
    public function main(): void
    {
        // Write your program here
        $count = 0;
        $sum = 0;

        echo "Give a number: ";
        $num = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));

        while ($num !== 0) {
            if ($num > 0) {
                $count++;
                $sum += $num;
            }

            echo "Give a number: ";
            $num = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));
        }

        if ($count > 0) {
            $average = $sum / $count;
            echo $average . "\n";
        } else {
            echo "Cannot calculate the average\n";
        }
    }
}
