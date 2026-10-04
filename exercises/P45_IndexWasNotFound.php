<?php

class P45_IndexWasNotFound
{
    public function main(): void
    {
        
        $array = [6, 2, 8, 1, 3, 0, 9, 7];

        // Write your code here
       echo "Search for? ";
        $search = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));

        $foundIndex = -1;

        for ($i = 0; $i < count($array); $i++) {
            if ($array[$i] === $search) {
                $foundIndex = $i;
                break;
            }
        }

        if ($foundIndex !== -1) {
            echo $search . " is at index " . $foundIndex . ".\n";
        } else {
            echo $search . " was not found.\n";
        }
    }
}
