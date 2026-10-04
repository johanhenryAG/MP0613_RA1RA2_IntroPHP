<?php

class P32_OnlyPositives
{
    public function main(): void
    {
        // Write your code here
        echo "Give a number: ";
        $num = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));

        while ($num !== 0){
            if ($num < 0){
                echo "Unsuitable number\n";
            } else {
                echo ($num * $num) . "\n";
            }
        echo "Give a number: ";
        $num = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));

        }
    }
}
