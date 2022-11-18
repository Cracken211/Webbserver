<?php

function getChar($string){

$string = explode(" ", $string);
for ($i = 0; $i < count($string); $i++){
    $stringOne = $string[$i];
    $stringTwo = $stringOne[0];

    if($stringTwo == "d" || $stringTwo == "D"){
        echo "$stringOne\n";
    }
}
}

$sentence = "dood You're good at English when you know the difference between a man eating chicken and a man-eating chicken dawg";
getChar($sentence);
