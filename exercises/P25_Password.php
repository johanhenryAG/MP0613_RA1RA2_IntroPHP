<?php

class P25_Password
{
    public function main(): void
    {
        // Write your code here
       echo "Password?";
        $pswd = trim(fgets($GLOBALS['STDIN'] ?? STDIN));
        
        if ($pswd == "Caput Draconis"){
                echo "Welcome!\n";
            } else {
                echo "Off with you!\n";
            }  
    }
}
