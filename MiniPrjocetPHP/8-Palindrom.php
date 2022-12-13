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

// ELLER! 

function isPalindrome($str) {

    $str = preg_replace('/[^A-Za-z0-9]/', '', strtolower($str)); 
    return $str == strrev($str);
}

$str = readline("Enter text to check here >> ");
echo isPalindrome($str) ? "true" : "false"; 
