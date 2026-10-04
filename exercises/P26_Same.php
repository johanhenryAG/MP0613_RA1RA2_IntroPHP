<?php

class P26_Same
{
    public function main(): void
    {
        // Write your code here
        echo "Enter the first string:";
        $fs = trim(fgets($GLOBALS['STDIN'] ?? STDIN));
        echo "Enter the second string:";
        $ss = trim(fgets($GLOBALS['STDIN'] ?? STDIN));

        if ($fs == $ss){
                echo "Same\n";
            } else {
                echo "Different\n";
            }  
    }
}
