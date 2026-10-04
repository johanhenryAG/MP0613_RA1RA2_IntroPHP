<?php

class P43_Factorial
{
    public function main(): void
    {
        // Write your program here
        echo "Give a number: ";
        $n = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));

        $factorial = 1;

        for ($i = 1; $i <= $n; $i++) {
            $factorial *= $i;
        }

        echo "Factorial: " . $factorial . "\n";
    }
}
