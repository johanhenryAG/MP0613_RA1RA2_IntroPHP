<?php

class P30_CarryOn
{
    public function main(): void
    {
        // Write your code here
    while (true){
       echo "Shall we carry on? ";
       $msg = trim(fgets($GLOBALS['STDIN'] ?? STDIN));

       if ($msg === "no"){
        break;
       }
    }
    }
}
