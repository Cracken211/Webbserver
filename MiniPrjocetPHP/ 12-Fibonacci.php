<?php

// Instruction 
// Fibonacci-sekvensen är mycket känd eftersom man kan använda två efterföljande tal för att räkna ut det gyllene snittet (ni+1 / ni ≈ 1.6180…). 
// Man börjar med talen 0 och 1. Sen blir varje nästa tal summan av de två talen precis innan. 
// De 13 första talen är 0, 1, 1, 2, 3, 5, 8, 13, 21, 34, 55, 89, 144. Om 0 är det första talet så är det 25e talet 46368. Gör ett program som räknar ut detta.

function fibonacci($antal){

    $antal -= 1;
    $fibonacci = [0, 1];

    for($i = 1; $i < $antal; $i++){
        $fibonacci[] = $fibonacci[$i] + $fibonacci[$i - 1];
    }
    print_r($fibonacci);
}

fibonacci(25); 
