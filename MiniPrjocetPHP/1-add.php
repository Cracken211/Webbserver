<?php
$num1 = random_int(1, 10);
$num2 = random_int(1, 10);
$total = $num1 + $num2;
$x = random_int(0, 1);

if($x === 1)
{
    $total = rand(2, 101);
}

echo "is $num1 + $num2 = $total?\n";
$answer = mb_strtolower((string)readline("True or False? ")) === "true";
solve($num1 + $num2 == $total, $answer);

function solve($problem, $answer)
{

    if ($problem === $answer) 
    {
        echo "Correct!\n";
    } 
    else 
    {
        echo "Incorrect!\n";
    }

}