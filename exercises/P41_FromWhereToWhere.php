<?php

class P41_FromWhereToWhere
{
    public function main(): void
    {
        // Write your program here
        echo "Where to? ";
        $to = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));

        echo "Where from? ";
        $from = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));

        for ($i = $from; $i <= $to; $i++) {
            echo $i . "\n";
        }
    }
}
