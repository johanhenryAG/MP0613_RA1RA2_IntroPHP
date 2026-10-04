<?php

class P34_NumberOfNegativeNumbers
{
    public function main(): void
    {
       // Write your code here
        $count = 0;

        echo "Give a number: ";
        $num = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));

        while ($num !== 0) {
            if ($num < 0) {
                $count++;
            }

            echo "Give a number: ";
            $num = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));
        }

        echo "Number of negative numbers: " . $count . "\n";
    }
}
