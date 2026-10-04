<?php

class P22_GradesAndPoints
{
    public function main(): void
    {
        // Write your code here
        echo "Give points[0-100]:";

        $points = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));

        if ($points < 0){
            echo "Grade: impossible!\n";
        } elseif ($points <= 49){
            echo "Grade: failed\n";
        } elseif ($points <= 59){
            echo "Grade: 1\n";
        } elseif ($points <= 69){
            echo "Grade: 2\n";
        } elseif ($points <= 79){
            echo "Grade: 3\n";
        } elseif ($points <= 89){
            echo "Grade: 4\n";
        } elseif ($points <= 100){
            echo "Grade: 5\n";
        } else {
            echo "Grade: incredible!\n";
        }
    }
}