<?php
function rpsUser ($userThrow)
{
    $userThrow = strtolower(readline("Please enter your desired input. Rock, Paper och Scissors >> "));

    if ($userThrow == "Rock")
    {
        $userTrow = 0;
    }
    elseif($userThrow == "Paper")
    {
        $userTrow = 1;
    }
    elseif($userThrow == "Scissors")
    {
        $userTrow = 2;
    }
    else
    {
        echo "Invalid answer";
    }
    return $userThrow;
}

function rps ($userInpt, $genInpt)
{
    if ($genInpt == $userInpt) 
        {
        $outcome = "Drew...";
        }
        
        elseif ($genInpt == 0 && $userInpt == 1) 
        {
        $outcome = "Win!";
        }
        
        elseif ($genInpt == 1 && $userInpt == 2) 
        {
        $outcome = "Win!";
        }
        
        elseif ($genInpt == 2 && $userInpt == 0) 
        {
        $outcome = "Win!";
        }
        
        elseif ($genInpt == 2 && $userInpt == 1) 
        {
        $outcome = "Lost...";
        }
        
        elseif ($genInpt == 1 && $userInpt == 0) 
        {
        $outcome = "Lost...";
        }
        
        elseif ($genInpt == 0 && $userInpt == 2) 
        {
        $outcome = "Lost...";
        }
        else
        {
            $outcome = "VAR_Why did this become an error...";
            echo "Echo_Why did this become an error...";
        }

        echo "You $outcome";
};

$genInpt = rand(0,2);
echo "$genInpt\n"; // Bara så att jag kan see att det fungerar... 

 // Fungerar men fungerar inte... Får en undefined variable på $userThrow även fast den används... ?? Php 👍
rpsUser();
rps($genInpt, $userThrow);
