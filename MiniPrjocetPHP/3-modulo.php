<?php

(int)$num1 = rand(1, 100); 
(int)$num2 = rand(1, 100);

echo $num1 . " " . $num2 . "\n";

function findRemainder($num, $devisor)
{
    $remainder = ($num - $devisor * (int)($num / $devisor)); 
    return $remainder;
}

echo findRemainder($num1, $num2);
