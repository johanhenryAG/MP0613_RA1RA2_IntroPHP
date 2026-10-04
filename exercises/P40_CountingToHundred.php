<?php

class P40_CountingToHundred
{
    public function main(): void
    {
        // Write your program here
        $num = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));

        for ($i = $num; $i <= 100; $i++) {
            echo $i . "\n";
    }
    }
}
