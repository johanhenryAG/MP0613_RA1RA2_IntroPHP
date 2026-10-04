<?php

class P39_Counting
{
    public function main(): void
    {
        // Write your program here
        $num = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));
        for ($i = 0; $i <= $num; $i++) {
            echo $i . "\n";
        } 
    }
}
