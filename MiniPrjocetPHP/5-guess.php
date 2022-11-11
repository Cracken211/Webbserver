<?php

    $randomNumber = rand(1, 9);

    while(true)
    {
        $userAnswer = readline("What is your lucky number? >> ");
        if($userAnswer == $randomNumber)
        {
            break;
        }
        else
        {
            echo "Wrong... Try again.\n";
        }
    }

    echo "Correct! The number is $randomNumber.";

