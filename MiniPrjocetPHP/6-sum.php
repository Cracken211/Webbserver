<?php

$userLength = readline("Enter the length of the equation >> ");
$sum = 0; 

for ($i = 0; $i <= $userLength - 1; $i++)
{
    if($i % 3 == 0 or $i % 5 == 0)
    {
        $sum += $i;
    }
    else
    {
        continue;
    }
}
echo $sum;