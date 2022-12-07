<?php

function isPalindrome($str) {

    $str = preg_replace('/[^A-Za-z0-9]/', '', strtolower($str)); // De de good remover of the non good looking letters yes :) Finally found function. 
    return $str == strrev($str);
}

$str = readline("Enter text to check here >> ");
echo isPalindrome($str) ? "true" : "false"; 
