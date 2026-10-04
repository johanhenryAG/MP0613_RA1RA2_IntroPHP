<?php

class P23_AbsoluteValue
{
    public function main(): void
    {
        // Write your code here
        $num = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));
        
        if ($num < 0){
                echo ($num * -1) . "\n";
            } else {
                echo $num . "\n";
            }
    }
}
