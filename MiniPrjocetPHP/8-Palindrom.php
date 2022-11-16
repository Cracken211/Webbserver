<?php
function checkPalindrom($string)
{
    $stringReverse = strrev($string);
    if($string == $stringReverse){
        echo "Your string is palindrom!\n";
    } else{
        echo "Your string is not palindrom...\n";
    }   
}

echo "Check if your string is palindrom\n";
$stringUser = readline("Enter string here >> ");

checkPalindrom($stringUser);