<?php

class P28_LeapYear
{
    public function main(): void
    {
        // Write your code here
        echo "Give a year:";
        $year = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));

        if (($year % 4 == 0  && $year % 100 != 0) || ($year % 400 == 0)){
            echo "The year is a leap year.\n";
        } else {
            echo "The year is not a leap year.\n";
        }
    }
}


