<?php

class P29_GiftTax
{
    public function main(): void
    {
        // Write your code here
       echo"Value of the gift? ";
       $value = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));
    
       if ($value>=5000 && $value<25000){
          echo "Tax: " . (100 +($value - 5000) * 0.08) . "\n";
       } elseif ($value>=25000 && $value<55000){
          echo "Tax: " . (1700 +($value - 25000) * 0.10) . "\n";
       } elseif ($value>=55000 && $value<200000){
          echo "Tax: " . (4700 +($value - 55000) * 0.12) . "\n";
       } elseif ($value>=200000 && $value<1000000){
          echo "Tax: " . (22100 +($value - 200000) * 0.15) . "\n";
       } elseif ($value>=1000000){
          echo "Tax: " . (142100 +($value - 1000000) * 0.17) . "\n";
       } else {
         echo " No tax!\n";
       }
    }
}
